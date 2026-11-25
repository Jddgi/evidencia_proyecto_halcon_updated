@extends('layouts.app')

@section('content')

<div class="container">

    <div class="card">

        <div class="card-header">

            Register New Employee

        </div>

        <div class="card-body">

        <a
            href="/home"
            class="btn btn-secondary mb-3"
        >
            Home
        </a>
            <form method="POST" action="/employees/store">

                @csrf

                <div class="mb-3">

                    <label>Name</label>

                    <input
                        type="text"
                        name="name"
                        class="form-control"
                        required
                    >

                </div>

                <div class="mb-3">

                    <label>Email</label>

                    <input
                        type="email"
                        name="email"
                        class="form-control"
                        required
                    >

                </div>

                <div class="mb-3">

                    <label>Password</label>

                    <input
                        type="password"
                        name="password"
                        class="form-control"
                        required
                    >

                </div>

                <div class="mb-3">

                    <label>Role</label>

                    <select
                        name="role"
                        class="form-control"
                        required
                    >
                        <option value="Administrator">Administrator</option>
                        <option value="Sales">Sales</option>
                        <option value="Purchasing">Purchasing</option>
                        <option value="Warehouse">Warehouse</option>
                        <option value="Route">Route</option>
                    </select>

                </div>

                <button
                    type="submit"
                    class="btn btn-success"
                >
                    Create Employee
                </button>

            </form>

        </div>

    </div>

</div>

@endsection