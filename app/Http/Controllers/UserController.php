<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Listar usuarios
    public function index()
    {
        return User::all();
    }

    // Mostrar usuario
    public function show(string $id)
    {
        return User::findOrFail($id);
    }

    // Crear usuario
    public function store(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'is_active' => $request->is_active
        ]);

        return response()->json($user, 201);
    }

    // Actualizar usuario
    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);

        $user->update($request->all());

        return response()->json($user);
    }

    // Cambiar a inactivo
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);

        $user->update([
            'is_active' => false
        ]);

        return response()->json([
            'message' => 'Usuario desactivado correctamente'
        ]);
    }
}