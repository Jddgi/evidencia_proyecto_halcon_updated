@extends('layouts.app')

@section('content')

<div class="container">

    <div class="card">

        <div class="card-header">

            Manage Orders

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

            <table class="table table-bordered">

                <thead>

                    <tr>
                        <th>Invoice</th>
                        <th>Total</th>
                        <th>Status</th>
                    </tr>

                </thead>

                <tbody>

                    @foreach($orders as $order)

                    <tr>

                        <td>{{ $order->invoice }}</td>

                        <td>${{ $order->total }}</td>

                        <td>{{ $order->status }}</td>

                    </tr>

                    @endforeach

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection