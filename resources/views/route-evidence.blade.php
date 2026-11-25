@extends('layouts.app')

@section('content')

<div class="container">

    <div class="card">

        <div class="card-header">

            Delivery Evidence

        </div>

        <div class="card-body">

            <a href="/home" class="btn btn-secondary mb-3">

                ← Back

            </a>

            <table class="table table-bordered">

                <tr>
                    <th>Invoice</th>
                    <th>Evidence</th>
                </tr>

                @foreach($orders as $order)

                <tr>

                    <td>{{ $order->invoice }}</td>

                    <td>Photo Uploaded</td>

                </tr>

                @endforeach

            </table>

        </div>

    </div>

</div>

@endsection