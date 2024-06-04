<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Midtrans\Config;
use Midtrans\Snap;
use App\Models\Order;
use App\Models\OrderItem;

class PaymentController extends Controller
{
    public function index(Request $request)
    {
        $orderId = $request->get('order_id');
        $order = Order::find($orderId);

        if (!$order) {
            return redirect()->route('cart.index')->with('error', 'Order not found.');
        }

        return view('payment.index', ['order' => $order, 'orderId' => $orderId]);
    }

    public function processPayment(Request $request)
    {
        // Set Midtrans configuration
        Config::$serverKey = config('midtrans.server_key');
        Config::$isProduction = config('midtrans.is_production');
        Config::$isSanitized = config('midtrans.is_sanitized');
        Config::$is3ds = config('midtrans.is_3ds');

        // Retrieve order data based on ID sent from the form
        $orderId = $request->input('order_id');
        $order = Order::find($orderId);

        if (!$order) {
            return redirect()->back()->with('error', 'Order not found.');
        }

        // Prepare transaction details
        $orderItems = OrderItem::where('order_id', $order->id)->get();
        $itemDetails = $orderItems->map(function ($item) {
            return [
                'id' => $item->id_product,
                'price' => $item->price,
                'quantity' => $item->quantity,
                'name' => 'Product ' . $item->id_product,
            ];
        })->toArray();

        $params = [
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
            'callbacks' => [
                'finish' => config('midtrans.redirect_url')
            ],
        ];

        try {
            $paymentUrl = Snap::createTransaction($params)->redirect_url;
            return redirect($paymentUrl);
        } catch (\Exception $e) {
            \Log::error('Payment Error: ' . $e->getMessage());
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function notificationHandler(Request $request)
    {
        // Set Midtrans configuration
        Config::$serverKey = config('SB-Mid-server-1NUtZwXNgYsnMPLUBmK910Pn');
        Config::$isProduction = config('midtrans.is_production');
        Config::$isSanitized = config('midtrans.is_sanitized');
        Config::$is3ds = config('midtrans.is_3ds');

        // Get the notification
        $notification = new \Midtrans\Notification();

        $transaction = $notification->transaction_status;
        $type = $notification->payment_type;
        $orderId = $notification->order_id;
        $fraud = $notification->fraud_status;

        $order = Order::findOrFail($orderId);

        if ($transaction == 'capture') {
            if ($type == 'credit_card') {
                if ($fraud == 'challenge') {
                    $order->status = 'challenge';
                } else {
                    $order->status = 'success';
                }
            }
        } else if ($transaction == 'settlement') {
            $order->status = 'success';
        } else if ($transaction == 'pending') {
            $order->status = 'pending';
        } else if ($transaction == 'deny') {
            $order->status = 'deny';
        } else if ($transaction == 'expire') {
            $order->status = 'expire';
        } else if ($transaction == 'cancel') {
            $order->status = 'cancel';
        }

        $order->save();

        return response()->json(['status' => 'ok']);
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
            return redirect()->route('home')->with('success', 'Transaction successful, thank you!');
        }

        return redirect()->route('home')->with('error', 'Transaction failed, please try again.');
    }
}

