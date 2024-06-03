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

        // Check if the user is authenticated
        if (!auth()->check()) {
            return response()->json(['error' => 'User not authenticated'], 401);
        }

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

    public function checkout(Request $request)
    {
        $userId = auth()->id();
        $cartItems = Cart::where('user_id', $userId)->with('product')->get();

        // Lakukan proses checkout (misalnya menyimpan detail order ke database)
        // Anda bisa menyesuaikan ini sesuai dengan kebutuhan aplikasi Anda

        // Redirect ke halaman pembayaran
        return redirect()->route('payment.process')->with('cartItems', $cartItems);
    }
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
