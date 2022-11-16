<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Rutas de categorias
Route::post('api/categorias/guardar', [App\Http\Controllers\CategoriasController::class, 'save']);
Route::put('api/categorias/actualizar', [App\Http\Controllers\CategoriasController::class, 'update']);

//Rutas de proveedores
Route::post('api/proveedores/guardar', [App\Http\Controllers\ProveedoresController::class, 'save']);
Route::put('api/proveedores/actualizar', [App\Http\Controllers\ProveedoresController::class, 'update']);

//Rutas de clientes
Route::post('api/clientes/guardar', [App\Http\Controllers\ClientesController::class, 'save']);
Route::put('api/clientes/actualizar', [App\Http\Controllers\ClientesController::class, 'update']);

//Rutas de productos
Route::post('api/productos/guardar', [App\Http\Controllers\ProductosController::class, 'save']);
Route::put('api/productos/actualizar', [App\Http\Controllers\ProductosController::class, 'update']);

//Rutas ordenes
Route::post('api/ordenes/guardar', [App\Http\Controllers\OrdenesController::class, 'save']);
Route::put('api/ordenes/actualizar', [App\Http\Controllers\OrdenesController::class, 'update']);

//Detalle_orden
Route::post('api/detalle_ordenes/guardar', [App\Http\Controllers\DetalleOrdenesController::class, 'save']);
Route::put('api/detalle_ordenes/actualizar', [App\Http\Controllers\DetalleOrdenesController::class, 'update']);
