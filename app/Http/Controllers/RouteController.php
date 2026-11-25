<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function deliveries()
    {
        $orders = Order::latest()->get();

        return view('route-deliveries', compact('orders'));
    }

    public function evidence()
    {
        $orders = Order::latest()->get();

        return view('route-evidence', compact('orders'));
    }

    public function completed()
    {
        $orders = Order::latest()->get();

        return view('route-completed', compact('orders'));
    }
}