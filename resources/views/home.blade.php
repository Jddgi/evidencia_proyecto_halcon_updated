@extends('layouts.app')

@section('content')

@if(session('success'))

<div class="alert alert-success">

    {{ session('success') }}

</div>

@endif

<div class="container">

    <div class="card shadow">

        <div class="card-header">

            HALCON Administrative Dashboard

        </div>

        <div class="card-body">

            <h2>Welcome, {{ Auth::user()->name }}</h2>

            <p>

                <strong>Role:</strong>

                {{ Auth::user()->role }}

            </p>

            <hr>

            @if(Auth::user()->role == 'Administrator')

                <h3>Administrator Dashboard</h3>

                <br>

                <div class="row">

                    <div class="col-md-3">

                        <div class="card text-center border-success">

                            <div class="card-body">

                                <h5>Total Users</h5>

                                <h2>{{ \App\Models\User::count() }}</h2>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-3">

                        <div class="card text-center border-primary">

                            <div class="card-body">

                                <h5>Active Users</h5>

                                <h2>{{ \App\Models\User::where('is_active', 1)->count() }}</h2>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-3">

                        <div class="card text-center border-danger">

                            <div class="card-body">

                                <h5>Inactive Users</h5>

                                <h2>{{ \App\Models\User::where('is_active', 0)->count() }}</h2>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-3">

                        <div class="card text-center border-dark">

                            <div class="card-body">

                                <h5>Roles</h5>

                                <h2>5</h2>

                            </div>

                        </div>

                    </div>

                </div>

                <br>

                <h4>Administrator Functions</h4>

                <p>
                    The administrator is responsible for user and role management.
                </p>

                <a href="/register-employee" class="btn btn-primary">

                    Register Employee

                </a>

                <a href="/employees" class="btn btn-success">

                    View Employees

                </a>

                <a href="/track-order" class="btn btn-secondary">

                    Order Tracking

                </a>

            @endif

            @if(Auth::user()->role == 'Sales')

    <h3>Sales Dashboard</h3>

    <p>
        Create and manage customer orders.
    </p>

    <br>

    <div class="row">

        <div class="col-md-4">

            <a
                href="/sales/create-order"
                class="text-decoration-none"
            >

                <div class="card text-center border-primary">

                    <div class="card-body">

                        <h5>Create Orders</h5>

                        <p>
                            Register new customer orders.
                        </p>

                    </div>

                </div>

            </a>

        </div>

        <div class="col-md-4">

            <a
                href="/sales/manage-orders"
                class="text-decoration-none"
            >

                <div class="card text-center border-success">

                    <div class="card-body">

                        <h5>Manage Orders</h5>

                        <p>
                            Review and update existing orders.
                        </p>

                    </div>

                </div>

            </a>

        </div>

        <div class="col-md-4">

            <a
                href="/track-order"
                class="text-decoration-none"
            >

                <div class="card text-center border-secondary">

                    <div class="card-body">

                        <h5>Track Orders</h5>

                        <p>
                            Monitor customer order status.
                        </p>

                    </div>

                </div>

            </a>

        </div>

    </div>

@endif
            @if(Auth::user()->role == 'Purchasing')

    <h3>Purchasing Dashboard</h3>

    <p>
        Support orders that require purchasing missing materials.
    </p>

    <br>

    <div class="row">

        <div class="col-md-4">

            <a
                href="/purchasing/materials"
                class="text-decoration-none"
            >

                <div class="card text-center border-warning">

                    <div class="card-body">

                        <h5>Missing Materials</h5>

                        <p>
                            Review materials required for customer orders.
                        </p>

                    </div>

                </div>

            </a>

        </div>

        <div class="col-md-4">

            <a
                href="/purchasing/requests"
                class="text-decoration-none"
            >

                <div class="card text-center border-primary">

                    <div class="card-body">

                        <h5>Purchase Requests</h5>

                        <p>
                            Create and manage purchase requests.
                        </p>

                    </div>

                </div>

            </a>

        </div>

        <div class="col-md-4">

            <a
                href="/purchasing/suppliers"
                class="text-decoration-none"
            >

                <div class="card text-center border-success">

                    <div class="card-body">

                        <h5>Supplier Follow-Up</h5>

                        <p>
                            Monitor supplier order status.
                        </p>

                    </div>

                </div>

            </a>

        </div>

    </div>

@endif
            @if(Auth::user()->role == 'Warehouse')

    <h3>Warehouse Dashboard</h3>

    <p>
        Process and prepare customer orders.
    </p>

    <br>

    <div class="row">

        <div class="col-md-4">

            <a
                href="/warehouse/prepare"
                class="text-decoration-none"
            >

                <div class="card text-center border-warning">

                    <div class="card-body">

                        <h5>Orders to Prepare</h5>

                        <p>

                            Review pending customer orders.

                        </p>

                    </div>

                </div>

            </a>

        </div>

        <div class="col-md-4">

            <a
                href="/warehouse/packaging"
                class="text-decoration-none"
            >

                <div class="card text-center border-primary">

                    <div class="card-body">

                        <h5>Packaging</h5>

                        <p>

                            Prepare products for shipment.

                        </p>

                    </div>

                </div>

            </a>

        </div>

        <div class="col-md-4">

            <a
                href="/warehouse/shipment"
                class="text-decoration-none"
            >

                <div class="card text-center border-success">

                    <div class="card-body">

                        <h5>Ready for Shipment</h5>

                        <p>

                            Orders ready for delivery.

                        </p>

                    </div>

                </div>

            </a>

        </div>

    </div>

@endif
            @if(Auth::user()->role == 'Route')

    <h3>Route Dashboard</h3>

    <p>
        Manage routed orders and delivery evidence.
    </p>

    <br>

    <div class="row">

        <div class="col-md-4">

            <a
                href="/route/deliveries"
                class="text-decoration-none"
            >

                <div class="card text-center border-primary">

                    <div class="card-body">

                        <h5>Assigned Deliveries</h5>

                        <p>

                            Orders assigned for delivery.

                        </p>

                    </div>

                </div>

            </a>

        </div>

        <div class="col-md-4">

            <a
                href="/route/evidence"
                class="text-decoration-none"
            >

                <div class="card text-center border-warning">

                    <div class="card-body">

                        <h5>Delivery Evidence</h5>

                        <p>

                            Register delivery evidence.

                        </p>

                    </div>

                </div>

            </a>

        </div>

        <div class="col-md-4">

            <a
                href="/route/completed"
                class="text-decoration-none"
            >

                <div class="card text-center border-success">

                    <div class="card-body">

                        <h5>Completed Deliveries</h5>

                        <p>

                            View completed deliveries.

                        </p>

                    </div>

                </div>

            </a>

        </div>

    </div>

@endif
        </div>

    </div>

</div>

@endsection