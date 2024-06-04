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

        $vat = $subtotal * 0.1; // Example VAT calculation at 10%
        $total = $subtotal + $vat;

        return view('checkout.index', compact('cartItems', 'subtotal', 'vat', 'total'));
    }

    public function store(Request $request)
    {
        // Validate received data
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

        // Calculate the total
        $userId = auth()->id();
        $cartItems = Cart::where('user_id', $userId)->with('product')->get();

        $subtotal = $cartItems->sum(function ($item) {
            return $item->product->price_product * $item->quantity;
        });

        $vat = $subtotal * 0.1; // Example VAT calculation at 10%
        $total = $subtotal + $vat;

        // Create new order
        $order = new Order();
        $order->first_name = $validatedData['firstName'];
        $order->last_name = $validatedData['lastName'];
        $order->email = $validatedData['email'];
        $order->phone = $validatedData['phone'];
        $order->province = $validatedData['province'];
        $order->regency = $validatedData['regency'];
        $order->district = $validatedData['district'];
        $order->village = $validatedData['village'];
        $order->total = $total;
        $order->save();

        // Move items from cart to order items, but do not remove from cart
        foreach ($cartItems as $cartItem) {
            $orderItem = new OrderItem();
            $orderItem->order_id = $order->id;
            $orderItem->id_product = $cartItem->product_id; // Adjust column to match your database
            $orderItem->quantity = $cartItem->quantity;
            $orderItem->price = $cartItem->product->price_product;
            $orderItem->save();
        }

        // Return a success response with the order ID
        return response()->json(['success' => 'Order has been placed successfully!', 'order_id' => $order->id], 200);
    }
}
