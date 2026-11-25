@extends('layouts.app')

@section('content')

<div class="container">

    <div class="card">

        <div class="card-header">

            Missing Materials

        </div>

        <div class="card-body">

            <a href="/home" class="btn btn-secondary mb-3">

                ← Back

            </a>

            <table class="table table-bordered">

                <thead>

                    <tr>

                        <th>Order</th>

                        <th>Material</th>

                        <th>Quantity</th>

                        <th>Status</th>

                    </tr>

                </thead>

                <tbody>

                    @foreach($orders as $order)

                        <tr>

                            <td>{{ $order->invoice }}</td>

                            <td>

                                @php

                                    $materials = [
                                        'Industrial Cable',
                                        'Fiber Connector',
                                        'Router Kit',
                                        'Network Switch'
                                    ];

                                @endphp

                                {{ $materials[$order->id % 4] }}

                            </td>

                            <td>

                                {{ ($order->id * 10) % 75 + 10 }}

                            </td>

                            <td>

                                Pending Purchase

                            </td>

                        </tr>

                    @endforeach

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection