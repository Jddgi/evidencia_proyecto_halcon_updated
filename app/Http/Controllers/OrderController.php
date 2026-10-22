<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    // Listar órdenes de más nueva a más vieja
    public function index()
    {
        return Order::latest()->get();
    }

    // Ver una orden específica
    public function show($id)
    {
        return Order::findOrFail($id);
    }

    // Buscar por número de factura
    public function searchByInvoice($invoice)
    {
    return Order::where('invoice', $invoice)->firstOrFail();
    }

    // Crear orden
    public function store(Request $request)
    {
        return Order::create($request->all());
    }

    // Actualizar orden
    public function update(Request $request, $id)
    {
        $order = Order::findOrFail($id);

        $order->update($request->all());

        return $order;
    }

    // Archivar orden (Soft Delete)
    public function destroy($id)
    {
        $order = Order::findOrFail($id);

        $order->delete();

        return response()->json([
            'message' => 'Orden archivada correctamente'
        ]);
    }

    // Listar órdenes archivadas
    public function archived()
    {
        return Order::onlyTrashed()->get();
    }
}