<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class PurchasingController extends Controller
{
    public function materials()
    {
        $orders = Order::latest()->get();

        return view('purchasing-materials', compact('orders'));
    }

    public function requests()
    {
        $orders = Order::latest()->get();

        return view('purchasing-requests', compact('orders'));
    }

    public function suppliers()
    {
        $orders = Order::latest()->get();

        return view('purchasing-suppliers', compact('orders'));
    }
}