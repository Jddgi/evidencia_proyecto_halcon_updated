@extends('layouts.app')

@section('content')

<div class="container">

    <div class="card">

        <div class="card-header">

            Purchase Requests

        </div>

        <div class="card-body">

            <a href="/home" class="btn btn-secondary mb-3">

                ← Back

            </a>

            <table class="table table-bordered">

                <thead>

                    <tr>
                        <th>Request</th>
                        <th>Supplier</th>
                        <th>Status</th>
                    </tr>

                </thead>

                <tbody>

                    @foreach($orders as $order)

                    <tr>

                        <td>
                            PR-{{ $order->id }}
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

                            Pending Approval

                        </td>

                    </tr>

                    @endforeach

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection