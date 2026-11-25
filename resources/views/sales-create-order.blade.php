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

                    <label>Total</label>

                    <input
                        type="number"
                        step="0.01"
                        name="total"
                        class="form-control"
                        required
                    >

                </div>

                <div class="mb-3">

                    <label>Status</label>

                    <select
                        name="status"
                        class="form-control"
                    >

                        <option value="pending">
                            Pending
                        </option>

                        <option value="processing">
                            Processing
                        </option>

                        <option value="in transit">
                            In Transit
                        </option>

                        <option value="delivered">
                            Delivered
                        </option>

                    </select>

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