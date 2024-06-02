<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userId = auth()->id(); // Asumsi pengguna sudah login
        $cartItems = Cart::where('user_id', $userId)->with('product')->get();

        return view('cart.index', compact('cartItems'));
    }
    public function addToCart(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:product,id_product',
            'quantity' => 'required|integer|min:1',
        ]);

        $userId = auth()->id();
        $productId = $request->input('product_id');
        $quantity = $request->input('quantity');

        $cartItem = Cart::where('user_id', $userId)->where('id_product', $productId)->first();

        if ($cartItem) {
            $cartItem->quantity += $quantity;
            $cartItem->save();
        } else {
            Cart::create([
                'user_id' => $userId,
                'id_product' => $productId,
                'quantity' => $quantity,
            ]);
        }

        return redirect()->back()->with('success', 'Produk berhasil ditambahkan ke keranjang.');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $cartItem = Cart::findOrFail($id);

        if ($request->has('increase')) {
            $cartItem->quantity += 1;
        } elseif ($request->has('decrease') && $cartItem->quantity > 1) {
            $cartItem->quantity -= 1;
        } else {
            $cartItem->quantity = $request->input('quantity');
        }

        $cartItem->save();

        return redirect()->route('cart.index')->with('success', 'Kuantitas berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $cartItem = Cart::findOrFail($id);
        $cartItem->delete();

        return redirect()->route('cart.index')->with('success', 'Produk berhasil dihapus dari keranjang.');
    }

}
