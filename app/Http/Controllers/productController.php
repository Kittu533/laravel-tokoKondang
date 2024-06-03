<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showProducts()
    {
        $products = Product::all();
        return view('product', ['products' => $products]);
    }

    public function show($id_product)
    {
        $product = Product::where('id_product', $id_product)->first();
        $products = Product::all(); // Ambil semua produk untuk slider
        if (!$product) {
            abort(404, 'Product not found');
        }
        return view('productDetail', compact('product', 'products')); // Pastikan 'products' dikirim ke view
    }

    public function showProductCollection()
    {
        $products = Product::all();
        return view('home', ['products' => $products]);
    }

    public function sliderProduct()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }
}
