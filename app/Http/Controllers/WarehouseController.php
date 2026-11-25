<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class WarehouseController extends Controller
{
    public function prepare()
    {
        $orders = Order::latest()->get();

        return view('warehouse-prepare', compact('orders'));
    }

    public function packaging()
    {
        $orders = Order::latest()->get();

        return view('warehouse-packaging', compact('orders'));
    }

    public function shipment()
    {
        $orders = Order::latest()->get();

        return view('warehouse-shipment', compact('orders'));
    }
}