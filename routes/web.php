<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {

    return redirect('/login');

});

Route::get('/track-order', function () {

    return view('welcome');

});

Route::get('/register-employee', [App\Http\Controllers\EmployeeController::class, 'create']);
Route::post('/employees/store', [App\Http\Controllers\EmployeeController::class, 'store']);

Auth::routes();
Route::get('/home', [HomeController::class, 'index'])
    ->name('home');


Route::get('/employees', [App\Http\Controllers\EmployeeController::class, 'index']);

Route::get('/employees/{id}/edit', [App\Http\Controllers\EmployeeController::class, 'edit']);

Route::post('/employees/{id}/update', [App\Http\Controllers\EmployeeController::class, 'update']);

Route::get('/sales/create-order', [App\Http\Controllers\SalesController::class, 'createOrder']);

Route::post('/sales/store-order', [App\Http\Controllers\SalesController::class, 'storeOrder']);

Route::get('/sales/manage-orders', [App\Http\Controllers\SalesController::class, 'manageOrders']);

Route::get('/purchasing/materials', [App\Http\Controllers\PurchasingController::class, 'materials']);

Route::get('/purchasing/requests', [App\Http\Controllers\PurchasingController::class, 'requests']);

Route::get('/purchasing/suppliers', [App\Http\Controllers\PurchasingController::class, 'suppliers']);

Route::get('/warehouse/prepare', [App\Http\Controllers\WarehouseController::class, 'prepare']);

Route::get('/warehouse/packaging', [App\Http\Controllers\WarehouseController::class, 'packaging']);

Route::get('/warehouse/shipment', [App\Http\Controllers\WarehouseController::class, 'shipment']);

Route::get('/route/deliveries', [App\Http\Controllers\RouteController::class, 'deliveries']);

Route::get('/route/evidence', [App\Http\Controllers\RouteController::class, 'evidence']);

Route::get('/route/completed', [App\Http\Controllers\RouteController::class, 'completed']);