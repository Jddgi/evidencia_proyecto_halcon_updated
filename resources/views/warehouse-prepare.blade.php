@extends('layouts.app')

@section('content')

<div class="container">

    <div class="card">

        <div class="card-header">

            Orders to Prepare

        </div>

        <div class="card-body">

            <a href="/home" class="btn btn-secondary mb-3">

                ← Back

            </a>

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

                            <td>Pending Preparation</td>

                        </tr>

                    @endforeach

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection