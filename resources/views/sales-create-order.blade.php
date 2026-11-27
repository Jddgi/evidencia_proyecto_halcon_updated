@extends('layouts.app')

@section('content')

<div class="container">

    <div class="card">

        <div class="card-header">

            Create Customer Order

        </div>

        <div class="card-body">

            <a href="/home" class="btn btn-secondary mb-3">

                ← Back

            </a>

            <form method="POST" action="/sales/store-order">

                @csrf

                <div class="mb-3">

                    <label>Invoice Number</label>

                    <input
                        type="text"
                        name="invoice"
                        class="form-control"
                        required
                    >

                </div>

                <div class="mb-3">

                    <label>Customer Name / Company Name</label>

                    <input
                        type="text"
                        name="customer_name"
                        class="form-control"
                        required
                    >

                </div>

                <div class="mb-3">

                    <label>Customer Number</label>

                    <input
                        type="text"
                        name="customer_number"
                        class="form-control"
                        required
                    >

                </div>

                <div class="mb-3">

                    <label>Fiscal Information</label>

                    <input
                        type="text"
                        name="fiscal_information"
                        class="form-control"
                        required
                    >

                </div>

                <div class="mb-3">

                    <label>Order Date</label>

                    <input
                        type="datetime-local"
                        name="order_date"
                        class="form-control"
                        required
                    >

                </div>

                <div class="mb-3">

                    <label>Delivery Address</label>

                    <input
                        type="text"
                        name="delivery_address"
                        class="form-control"
                        required
                    >

                </div>

                <div class="mb-3">

                    <label>Notes / Additional Information</label>

                    <textarea
                        name="notes"
                        class="form-control"
                        rows="3"
                    ></textarea>

                </div>

                <div class="mb-3">

                    <label>Total</label>

                    <input
                        type="number"
                        step="0.01"
                        name="total"
                        class="form-control"
                        required
                    >

                </div>

                <div class="alert alert-info">

                    Status will be automatically assigned as:
                    <strong>Ordered</strong>

                </div>

                <button
                    type="submit"
                    class="btn btn-success"
                >
                    Save Order
                </button>

            </form>

        </div>

    </div>

</div>

@endsection