<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index()
    {
        $userId = auth()->id();
        $cartItems = Cart::where('user_id', $userId)->with('product')->get();

        $subtotal = $cartItems->sum(function ($item) {
            return $item->product->price_product * $item->quantity;
        });

        $vat = $subtotal * 0.1; // Contoh perhitungan PPN 10%
        $total = $subtotal + $vat;

        return view('checkout.index', compact('cartItems', 'subtotal', 'vat', 'total'));
    }

    public function store(Request $request)
    {
        // Validasi data yang diterima
        $validatedData = $request->validate([
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'province' => 'required|string',
            'regency' => 'required|string',
            'district' => 'required|string',
            'village' => 'required|string',
        ]);

        // Buat order baru
        $order = new Order();
        $order->first_name = $validatedData['firstName'];
        $order->last_name = $validatedData['lastName'];
        $order->email = $validatedData['email'];
        $order->phone = $validatedData['phone'];
        $order->province = $validatedData['province'];
        $order->regency = $validatedData['regency'];
        $order->district = $validatedData['district'];
        $order->village = $validatedData['village'];
        $order->total = $request->total;
        $order->save();

        // Pindahkan item dari keranjang ke order item
        $cartItems = Cart::where('user_id', Auth::id())->get();
        foreach ($cartItems as $cartItem) {
            $orderItem = new OrderItem();
            $orderItem->order_id = $order->id;
            $orderItem->id_product = $cartItem->product_id; // Sesuaikan dengan kolom id_product
            $orderItem->quantity = $cartItem->quantity;
            $orderItem->price = $cartItem->product->price_product;
            $orderItem->save();

            // Hapus item dari keranjang
            $cartItem->delete();
        }

        // Redirect ke halaman payment
        return redirect()->route('payment.index');
    }
}
