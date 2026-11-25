@extends('layouts.app')

@section('content')

<div class="container">

    <div class="card">

        <div class="card-header">

            Registered Employees

        </div>

        <div class="card-body">
            
        <a href="/home" class="btn btn-secondary mb-3">
            Home
        </a>

            @if(session('success'))

                <div class="alert alert-success">
                    {{ session('success') }}
                </div>

            @endif

            <table class="table table-bordered">

                <thead>

                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>

                </thead>

                <tbody>

                    @foreach($users as $user)

                        <tr>

                            <td>{{ $user->name }}</td>

                            <td>{{ $user->email }}</td>

                            <td>{{ $user->role }}</td>

                            <td>

                                @if($user->is_active)

                                    Active

                                @else

                                    Inactive

                                @endif

                            </td>

                            <td>

                                <a
                                    href="/employees/{{ $user->id }}/edit"
                                    class="btn btn-warning btn-sm"
                                >
                                    Edit
                                </a>

                            </td>

                        </tr>

                    @endforeach

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection