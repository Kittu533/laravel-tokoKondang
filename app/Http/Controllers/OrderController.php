<?php 
namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function invoice(Order $order)
    {
        $orderItems = $order->orderItems; // pastikan relasi order items sudah benar di model Order
        return view('order.invoice', compact('order', 'orderItems'));
    }
}
