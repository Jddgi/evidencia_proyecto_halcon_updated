@extends('layouts.app')

@section('content')

<div class="container">

    <div class="card">

        <div class="card-header">

            Edit Order

        </div>

        <div class="card-body">

            <a href="/sales/manage-orders"
               class="btn btn-secondary mb-3">

                ← Back

            </a>

            <form method="POST"
                  action="/sales/orders/{{ $order->id }}/update">

                @csrf

                <div class="mb-3">

                    <label>Invoice Number</label>

                    <input
                        type="text"
                        value="{{ $order->invoice }}"
                        class="form-control locked-field"
                        disabled
                    >

                </div>

                <div class="mb-3">

                    <label>Customer Name</label>

                    <input
                        type="text"
                        value="{{ $order->customer_name }}"
                        class="form-control locked-field"
                        disabled
                    >

                </div>

                <div class="mb-3">

                    <label>Customer Number</label>

                    <input
                        type="text"
                        value="{{ $order->customer_number }}"
                        class="form-control locked-field"
                        disabled
                    >

                </div>

                <div class="mb-3">

                    <label>Fiscal Information</label>

                    <input
                        type="text"
                        value="{{ $order->fiscal_information }}"
                        class="form-control locked-field"
                        disabled
                    >

                </div>

                <div class="mb-3">

                    <label>Order Date</label>

                    <input
                        type="text"
                        value="{{ $order->order_date }}"
                        class="form-control locked-field"
                        disabled
                    >

                </div>

                <div class="mb-3">

                    <label>Delivery Address</label>

                    <input
                        type="text"
                        value="{{ $order->delivery_address }}"
                        class="form-control locked-field"
                        disabled
                    >

                </div>

                <div class="mb-3">

                    <label>Notes</label>

                    <textarea
                        name="notes"
                        class="form-control"
                        rows="4"
                    >{{ $order->notes }}</textarea>

                </div>

                <div class="mb-3">

                    <label>Total</label>

                    <input
                        type="text"
                        value="${{ number_format($order->total, 2) }}"
                        class="form-control locked-field"
                        disabled
                    >

                </div>

                <div class="mb-3">

                    <label>Status</label>

                    <select
                        name="status"
                        class="form-control"
                    >

                        <option value="Ordered"
                            {{ $order->status == 'Ordered' ? 'selected' : '' }}>
                            Ordered
                        </option>

                        <option value="In Process"
                            {{ $order->status == 'In Process' ? 'selected' : '' }}>
                            In Process
                        </option>

                        <option value="In Route"
                            {{ $order->status == 'In Route' ? 'selected' : '' }}>
                            In Route
                        </option>

                        <option value="Delivered"
                            {{ $order->status == 'Delivered' ? 'selected' : '' }}>
                            Delivered
                        </option>

                    </select>

                </div>

                <button
                    type="submit"
                    class="btn btn-success"
                >
                    Save Changes
                </button>

            </form>

        </div>

    </div>

</div>

<style>

.locked-field {

    background-color: #e9ecef !important;

    cursor: not-allowed !important;

    opacity: 0.90;

}

.locked-field:hover {

    cursor: not-allowed !important;

}

</style>

@endsection