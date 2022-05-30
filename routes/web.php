<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\ProductoventaController;

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

Route::resource('/producto', ProductoController::class);

Route::resource('/cliente', ClienteController::class);

Route::resource('/empleado', EmpleadoController::class);

Route::resource('/marca', MarcaController::class);

Route::resource('/proveedor', ProveedorController::class);

Route::resource('/venta', VentaController::class);

Route::resource('/productoventa',ProductoventaController::class);

