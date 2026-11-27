@extends('layouts.app')

@section('content')

<div class="container">

    <div class="card">

        <div class="card-header">

            Order Details

        </div>

        <div class="card-body">

            <a href="/sales/manage-orders"
               class="btn btn-secondary mb-3">

                ← Back

            </a>

            <a href="/sales/orders/{{ $order->id }}/edit"
               class="btn btn-warning mb-3">

                Edit Order

            </a>

            <form
                method="POST"
                 action="/sales/orders/{{ $order->id }}/delete"
                 onsubmit="return confirm('Are you sure you want to delete this order?');"
            >

            @csrf

            <button
                type="submit"
                class="btn btn-danger mb-3"
            >
                 Delete Order
            </button>

</form>

            <p><strong>Invoice:</strong> {{ $order->invoice }}</p>

            <p><strong>Customer Name:</strong> {{ $order->customer_name }}</p>

            <p><strong>Customer Number:</strong> {{ $order->customer_number }}</p>

            <p><strong>Fiscal Information:</strong> {{ $order->fiscal_information }}</p>

            <p><strong>Order Date:</strong> {{ $order->order_date }}</p>

            <p><strong>Delivery Address:</strong> {{ $order->delivery_address }}</p>

            <p><strong>Notes:</strong> {{ $order->notes }}</p>

            <p><strong>Total:</strong> ${{ $order->total }}</p>

            <p><strong>Status:</strong> {{ $order->status }}</p>

        </div>

    </div>

</div>

@endsection