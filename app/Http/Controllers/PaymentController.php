<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Midtrans\Config;
use Midtrans\Snap;

class PaymentController extends Controller
{
    /**
     * Handle the payment process.
     */
    public function index()
    {
        return view('payment.index'); // Pastikan Anda memiliki view 'payment/index.blade.php'
    }
   
}
