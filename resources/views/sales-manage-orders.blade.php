@extends('layouts.app')

@section('content')

<div class="container">

    <div class="card">

        <div class="card-header">

            Order Management

        </div>

        <div class="card-body">

            <a href="/home" class="btn btn-secondary mb-3">

                ← Back

            </a>

            @if(session('success'))

                <div class="alert alert-success">

                    {{ session('success') }}

                </div>

            @endif

            <form method="GET" action="/sales/manage-orders">

                <div class="row mb-3">

                    <div class="col-md-4">

                        <input
                            type="text"
                            name="invoice"
                            class="form-control"
                            placeholder="Search Invoice Number"
                            value="{{ request('invoice') }}"
                        >

                    </div>

                    <div class="col-md-4">

                        <input
                            type="text"
                            name="customer_number"
                            class="form-control"
                            placeholder="Search Customer Number"
                            value="{{ request('customer_number') }}"
                        >

                    </div>

                    <div class="col-md-4">

                        <select
                            name="status"
                            class="form-control"
                        >

                            <option value="">
                                All Statuses
                            </option>

                            <option value="Ordered">
                                Ordered
                            </option>

                            <option value="In Process">
                                In Process
                            </option>

                            <option value="In Route">
                                In Route
                            </option>

                            <option value="Delivered">
                                Delivered
                            </option>

                        </select>

                    </div>

                </div>

                <button
                    type="submit"
                    class="btn btn-primary mb-3"
                >
                    Search
                </button>

                <a
                    href="/sales/deleted-orders"
                    class="btn btn-danger mb-3"
                >
                    Deleted Orders
                </a>

            </form>

            <div class="alert alert-info">

                Available Status:
                Ordered | In Process | In Route | Delivered

            </div>

            <table class="table table-bordered">

                <thead>

                    <tr>

                        <th>Invoice</th>

                        <th>Customer Name</th>

                        <th>Customer Number</th>

                        <th>Order Date</th>

                        <th>Total</th>

                        <th>Status</th>

                        <th>Action</th>

                    </tr>

                </thead>

                <tbody>

                    @foreach($orders as $order)

                    <tr>

                        <td>{{ $order->invoice }}</td>

                        <td>{{ $order->customer_name }}</td>

                        <td>{{ $order->customer_number }}</td>

                        <td>{{ $order->order_date }}</td>

                        <td>${{ number_format($order->total, 2) }}</td>

                        <td>{{ $order->status }}</td>

                        <td>

                            <a
                                href="/sales/orders/{{ $order->id }}"
                                class="btn btn-primary btn-sm"
                            >
                                View Details
                            </a>

                        </td>

                    </tr>

                    @endforeach

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection