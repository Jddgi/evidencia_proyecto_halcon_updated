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

            'customer_name' => $request->customer_name,

            'customer_number' => $request->customer_number,

            'fiscal_information' => $request->fiscal_information,

            'order_date' => $request->order_date,

            'delivery_address' => $request->delivery_address,

            'notes' => $request->notes,

            'total' => $request->total,

            'status' => 'Ordered'

        ]);

        return redirect('/sales/manage-orders')
            ->with('success', 'Order created successfully.');
    }

    public function manageOrders(Request $request)
    {
        $query = Order::query();

        if ($request->filled('invoice')) {

            $query->where(
                'invoice',
                'like',
                '%' . $request->invoice . '%'
            );

        }

        if ($request->filled('customer_number')) {

            $query->where(
                'customer_number',
                'like',
                '%' . $request->customer_number . '%'
            );

        }

        if ($request->filled('status')) {

            $query->where(
                'status',
                $request->status
            );

        }

        $orders = $query->latest()->get();

        return view(
            'sales-manage-orders',
            compact('orders')
        );
    }

    public function showOrder($id)
    {
    $order = Order::withTrashed()->findOrFail($id);

    return view(
        'sales-order-details',
        compact('order')
    );
    }

    public function editOrder($id)
    {
        $order = Order::withTrashed()->findOrFail($id);

    return view(
        'sales-edit-order',
        compact('order')
    );
    }

    public function deleteOrder($id)
{
    $order = Order::findOrFail($id);

    $order->delete();

    return redirect('/sales/manage-orders')
        ->with('success', 'Order deleted successfully.');
}

public function deletedOrders(Request $request)
{
    $query = Order::onlyTrashed();

    if ($request->filled('invoice')) {

        $query->where(
            'invoice',
            'like',
            '%' . $request->invoice . '%'
        );

    }

    if ($request->filled('customer_number')) {

        $query->where(
            'customer_number',
            'like',
            '%' . $request->customer_number . '%'
        );

    }

    $orders = $query->latest()->get();

    return view(
        'sales-deleted-orders',
        compact('orders')
    );
}

public function restoreOrder($id)
{
    $order = Order::onlyTrashed()->findOrFail($id);

    $order->restore();

    return redirect('/sales/deleted-orders')
        ->with('success', 'Order restored successfully.');
}


    public function updateOrder(Request $request, $id)
{
    $order = Order::withTrashed()->findOrFail($id);


        $order->update([

            'customer_name' => $request->customer_name,

            'customer_number' => $request->customer_number,

            'delivery_address' => $request->delivery_address,

            'notes' => $request->notes,

            'status' => $request->status

        ]);

        return redirect('/sales/manage-orders')
            ->with('success', 'Order updated successfully.');
    }
}