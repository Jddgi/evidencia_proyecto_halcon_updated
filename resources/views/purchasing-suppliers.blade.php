@extends('layouts.app')

@section('content')

<div class="container">

    <div class="card">

        <div class="card-header">

            Supplier Follow-Up

        </div>

        <div class="card-body">

            <a href="/home" class="btn btn-secondary mb-3">

                ← Back

            </a>

            <table class="table table-bordered">

                <thead>

                    <tr>
                        <th>Order</th>
                        <th>Supplier</th>
                        <th>Status</th>
                    </tr>

                </thead>

                <tbody>

                    @foreach($orders as $order)

                    <tr>

                        <td>

                            {{ $order->invoice }}

                        </td>

                        <td>

                            @php

                            $suppliers = [
                                'ABC Supplier',
                                'Tech Materials Inc.',
                                'Global Networks',
                                'Industrial Hardware'
                            ];

                            @endphp

                            {{ $suppliers[$order->id % 4] }}

                        </td>

                        <td>

                            Ordered

                        </td>

                    </tr>

                    @endforeach

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection