<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SalesController extends Controller
{
    public function createOrder()
    {
        return view('sales-create-order');
    }

    public function storeOrder(Request $request)
    {
        Order::create([
            'user_id' => Auth::id(),
            'invoice' => $request->invoice,
            'total' => $request->total,
            'status' => $request->status,
        ]);

        return redirect('/sales/manage-orders')
            ->with('success', 'Order created successfully.');
    }

    public function manageOrders()
    {
        $orders = Order::latest()->get();

        return view('sales-manage-orders', compact('orders'));
    }
}