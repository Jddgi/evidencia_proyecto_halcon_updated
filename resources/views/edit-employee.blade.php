@extends('layouts.app')

@section('content')

<div class="container">

    <div class="card">

        <div class="card-header">

            Edit Employee

        </div>

        <div class="card-body">

            <a
                href="/employees"
                class="btn btn-secondary mb-3"
            >
                Back to Employees
            </a>

            <form
                method="POST"
                action="/employees/{{ $user->id }}/update"
            >

                @csrf

                <div class="mb-3">

                    <label>Name</label>

                    <input
                        type="text"
                        name="name"
                        class="form-control"
                        value="{{ $user->name }}"
                    >

                </div>

                <div class="mb-3">

                    <label>Email</label>

                    <input
                        type="email"
                        name="email"
                        class="form-control"
                        value="{{ $user->email }}"
                    >

                </div>

                <div class="mb-3">

                    <label>Role</label>

                    <select
                        name="role"
                        class="form-control"
                    >

                        <option value="Administrator" {{ $user->role == 'Administrator' ? 'selected' : '' }}>
                            Administrator
                        </option>

                        <option value="Sales" {{ $user->role == 'Sales' ? 'selected' : '' }}>
                            Sales
                        </option>

                        <option value="Purchasing" {{ $user->role == 'Purchasing' ? 'selected' : '' }}>
                            Purchasing
                        </option>

                        <option value="Warehouse" {{ $user->role == 'Warehouse' ? 'selected' : '' }}>
                            Warehouse
                        </option>

                        <option value="Route" {{ $user->role == 'Route' ? 'selected' : '' }}>
                            Route
                        </option>

                    </select>

                </div>

                <div class="mb-3">

                    <label>Status</label>

                    <select
                        name="is_active"
                        class="form-control"
                    >

                        <option value="1" {{ $user->is_active ? 'selected' : '' }}>
                            Active
                        </option>

                        <option value="0" {{ !$user->is_active ? 'selected' : '' }}>
                            Inactive
                        </option>

                    </select>

                </div>

                <button
                    type="submit"
                    class="btn btn-success"
                >
                    Save Changes
                </button>

            </form>

        </div>

    </div>

</div>

@endsection
