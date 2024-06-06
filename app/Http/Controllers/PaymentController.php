<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Midtrans\Config;
use Midtrans\Snap;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function index(Request $request)
    {
        $orderId = $request->get('order_id');
        $order = Order::find($orderId);

        if (!$order) {
            return redirect()->route('cart.index')->with('error', 'Order tidak ditemukan.');
        }

        // Konfigurasi Midtrans
        Config::$serverKey = config('midtrans.server_key');
        Config::$isProduction = config('midtrans.is_production');
        Config::$isSanitized = config('midtrans.is_sanitized');
        Config::$is3ds = config('midtrans.is_3ds');

        // Generate Snap token
        $params = $this->createTransactionParams($order);
        $snapToken = Snap::getSnapToken($params);

        // Ambil client key dari konfigurasi
        $clientKey = config('midtrans.client_key');

        return view('payment.index', [
            'order' => $order,
            'orderId' => $orderId,
            'clientKey' => $clientKey,
            'snapToken' => $snapToken,
        ]);
    }

    private function createTransactionParams($order)
    {
        $orderItems = OrderItem::where('order_id', $order->id)->get();
        $itemDetails = $orderItems->map(function ($item) {
            return [
                'id' => $item->id_product,
                'price' => $item->price,
                'quantity' => $item->quantity,
                'name' => 'Product ' . $item->id_product,
            ];
        })->toArray();

        return [
            'transaction_details' => [
                'order_id' => $order->id,
                'gross_amount' => $order->total,
            ],
            'customer_details' => [
                'first_name' => $order->first_name,
                'last_name' => $order->last_name,
                'email' => $order->email,
                'phone' => $order->phone,
            ],
            'item_details' => $itemDetails,
        ];
    }

    public function processPayment(Request $request)
    {
        // Konfigurasi Midtrans
        Config::$serverKey = config('midtrans.server_key');
        Config::$isProduction = config('midtrans.is_production');
        Config::$isSanitized = config('midtrans.is_sanitized');
        Config::$is3ds = config('midtrans.is_3ds');

        // Retrieve order data based on ID sent from the form
        $orderId = $request->input('order_id');
        $order = Order::find($orderId);

        if (!$order) {
            \Log::error('Order not found.', ['order_id' => $orderId]);
            return redirect()->back()->with('error', 'Order tidak ditemukan.');
        }

        // Store cart items in session
        $userId = Auth::id();
        $cartItems = Cart::where('user_id', $userId)->get();
        session(['cart_items' => $cartItems]);

        // Delete items from cart
        Cart::where('user_id', $userId)->delete();

        // Prepare transaction details
        $params = $this->createTransactionParams($order);

        \Log::info('Midtrans params', $params);

        try {
            $response = Snap::createTransaction($params);
            \Log::info('Midtrans response', ['response' => $response]);
            $paymentUrl = $response->redirect_url;
            return redirect($paymentUrl);
        } catch (\Exception $e) {
            \Log::error('Payment Error: ' . $e->getMessage(), ['params' => $params]);
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function finish(Request $request)
{
    $orderId = $request->input('order_id');
    $statusCode = $request->input('status_code');
    $transactionStatus = $request->input('transaction_status');

    if ($statusCode == 200 && $transactionStatus == 'settlement') {
        $order = Order::find($orderId);
        if ($order) {
            $order->status = 'paid';
            $order->save();
        }
        return redirect()->route('order.invoice', ['order' => $orderId])->with('success', 'Transaksi berhasil, terima kasih!');
    } else {
        // Kembalikan item cart dari session jika transaksi gagal
        $cartItems = session('cart_items', []);
        foreach ($cartItems as $item) {
            Cart::create([
                'user_id' => $item->user_id,
                'id_product' => $item->id_product,
                'quantity' => $item->quantity,
            ]);
        }
        return redirect()->route('home')->with('error', 'Transaksi gagal, silakan coba lagi.');
    }
}


}
