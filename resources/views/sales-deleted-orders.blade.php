@extends('layouts.app')

@section('content')

<div class="container">

    <div class="card">

        <div class="card-header">

            Deleted Orders

        </div>

        <div class="card-body">

            <a href="/sales/manage-orders"
               class="btn btn-secondary mb-3">

                ← Back

            </a>

            @if(session('success'))

                <div class="alert alert-success">

                    {{ session('success') }}

                </div>

            @endif

            <div class="alert alert-warning">

                These orders have been logically deleted and can be restored.

            </div>

            <form method="GET">

                <div class="row mb-3">

                    <div class="col-md-4">

                        <input
                            type="text"
                            name="invoice"
                            class="form-control"
                            placeholder="Search Invoice"
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

                    <div class="col-md-2">

                        <button
                            type="submit"
                            class="btn btn-primary w-100"
                        >
                            Search
                        </button>

                    </div>

                    <div class="col-md-2">

                        <a
                            href="/sales/deleted-orders"
                            class="btn btn-secondary w-100"
                        >
                            Clear
                        </a>

                    </div>

                </div>

            </form>

            <table class="table table-bordered">

                <thead>

                    <tr>

                        <th>Invoice</th>

                        <th>Customer Name</th>

                        <th>Customer Number</th>

                        <th>Total</th>

                        <th>Status</th>

                        <th>Deleted At</th>

                        <th>Action</th>

                    </tr>

                </thead>

                <tbody>

                    @forelse($orders as $order)

                    <tr>

                        <td>{{ $order->invoice }}</td>

                        <td>{{ $order->customer_name }}</td>

                        <td>{{ $order->customer_number }}</td>

                        <td>${{ number_format($order->total, 2) }}</td>

                        <td>{{ $order->status }}</td>

                        <td>{{ $order->deleted_at }}</td>

                        <td>

                            <a
                                href="/sales/orders/{{ $order->id }}"
                                class="btn btn-primary btn-sm"
                            >
                                View
                            </a>

                            <form
                                method="POST"
                                action="/sales/orders/{{ $order->id }}/restore"
                                style="display:inline;"
                            >

                                @csrf

                                <button
                                    type="submit"
                                    class="btn btn-success btn-sm"
                                >
                                    Restore
                                </button>

                            </form>

                        </td>

                    </tr>

                    @empty

                    <tr>

                        <td colspan="7" class="text-center text-danger">

                            Deleted order not found.

                        </td>

                    </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection