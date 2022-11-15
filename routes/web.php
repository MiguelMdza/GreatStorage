<?php

use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\SucursalController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::middleware('web')->group(function () {
    Route::get('/index', function () {
        return view('index');
    })->name('index');
});    

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('index');
    })->name('index');
    Route::resource('producto', ProductoController::class);
    Route::resource('proveedor', ProveedorController::class);
    Route::resource('sucursal', SucursalController::class);
});
