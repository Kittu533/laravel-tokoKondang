<?php
namespace App\Http\Controllers;

use Midtrans\Snap;
use Midtrans\Config;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CheckoutController extends Controller
{
    public function index()
    {
        $userId = auth()->id(); // Get the authenticated user's ID
        $cartItems = Cart::where('user_id', $userId)->with('product')->get();

        $subtotal = $cartItems->sum(function ($item) {
            return $item->product->price_product * $item->quantity;
        });

        $vat = $subtotal * 0.1; // Example VAT calculation (10% of subtotal)
        $total = $subtotal + $vat;

        return view('checkout.index', compact('cartItems', 'subtotal', 'vat', 'total'));
    }

    public function store(Request $request)
    {
        try {
            // Validasi input
            $request->validate([
                'firstName' => 'required|string|max:255',
                'lastName' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'province' => 'required|string|max:255',
                'regency' => 'required|string|max:255',
                'district' => 'required|string|max:255',
                'village' => 'required|string|max:255',
            ]);

            $userId = auth()->id(); // Get the authenticated user's ID
            $cartItems = Cart::where('user_id', $userId)->with('product')->get();

            $subtotal = $cartItems->sum(function ($item) {
                return $item->product->price_product * $item->quantity;
            });

            $vat = $subtotal * 0.1; // Example VAT calculation (10% of subtotal)
            $total = $subtotal + $vat;

            // Simpan data ke dalam database
            $order = Order::create([
                'first_name' => $request->input('firstName'),
                'last_name' => $request->input('lastName'),
                'email' => $request->input('email'),
                'province' => $request->input('province'),
                'regency' => $request->input('regency'),
                'district' => $request->input('district'),
                'village' => $request->input('village'),
                'total' => $total,
            ]);

            // Konfigurasi Midtrans
            Config::$serverKey = config('SB-Mid-server-1NUtZwXNgYsnMPLUBmK910Pn');
            Config::$isProduction = config('midtrans.is_production');
            Config::$isSanitized = config('midtrans.is_sanitized');
            Config::$is3ds = config('midtrans.is_3ds');

            // Data transaksi ke Midtrans
            $params = [
                'transaction_details' => [
                    'order_id' => $order->id,
                    'gross_amount' => $total, // Ganti dengan jumlah total order Anda
                ],
                'customer_details' => [
                    'first_name' => $order->first_name,
                    'last_name' => $order->last_name,
                    'email' => $order->email,
                    'phone' => '081234567890',
                ],
                'item_details' => $cartItems->map(function ($item) {
                    return [
                        'id' => $item->product->id,
                        'price' => $item->product->price_product,
                        'quantity' => $item->quantity,
                        'name' => $item->product->name_product,
                    ];
                })->toArray()
            ];

            $snapToken = Snap::getSnapToken($params);

            return response()->json(['snapToken' => $snapToken]);
        } catch (\Exception $e) {
            Log::error('Error in CheckoutController@store: ' . $e->getMessage());
            return response()->json(['message' => 'Internal Server Error'], 500);
        }
    }
}
