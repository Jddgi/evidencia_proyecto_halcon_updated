<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;

// USERS Endpoints
Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{id}', [UserController::class, 'show']);
Route::post('/users', [UserController::class, 'store']);
Route::put('/users/{id}', [UserController::class, 'update']);
Route::delete('/users/{id}', [UserController::class, 'destroy']); // Cambiar a inactivo

// ORDERS Endpoints
Route::get('/orders', [OrderController::class, 'index']);
Route::get('/orders/archived', [OrderController::class, 'archived']); // Importante poner antes de /{id}
Route::get('/orders/{id}', [OrderController::class, 'show']);
Route::get('/orders/invoice/{invoice}', [OrderController::class, 'searchByInvoice']);
Route::post('/orders', [OrderController::class, 'store']);
Route::put('/orders/{id}', [OrderController::class, 'update']);
Route::delete('/orders/{id}', [OrderController::class, 'destroy']); // Borrado lógico
