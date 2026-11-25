<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{
    public function create()
    {
        return view('register-employee');
    }

    public function store(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'is_active' => true,
        ]);

        return redirect('/home')
            ->with('success', 'Employee created successfully.');
    }

    public function index()
    {
        $users = User::all();

        return view('employees', compact('users'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('edit-employee', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->is_active = $request->is_active;

        $user->save();

        return redirect('/employees')
            ->with('success', 'Employee updated successfully.');
    }
}