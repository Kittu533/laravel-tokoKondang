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
        if (!$product) {
            abort(404, 'Product not found');
        }
        return view('productDetail', compact('product'));
    }

    public function showProductCollection()
    {
        $products = Product::all();
        return view('home', ['products' => $products]);
    }

    public function index()
    {
        $products = Product::paginate(9);
        return view('products.product', compact('products'));
    }
}
