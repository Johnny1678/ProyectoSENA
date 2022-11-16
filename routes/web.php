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

//Rutas de proveedores

Route::post('api/proveedores/guardar', [App\Http\Controllers\ProveedoresController::class, 'save']);

//Rutas de clientes
Route::post('api/clientes/guardar', [App\Http\Controllers\ClientesController::class, 'save']);

//Rutas de productos
Route::post('api/productos/guardar', [App\Http\Controllers\ProductosController::class, 'save']);

//Rutas ordenes
Route::post('api/ordenes/guardar', [App\Http\Controllers\OrdenesController::class, 'save']);

//Detalle_orden
Route::post('api/detalle_ordenes/guardar', [App\Http\Controllers\DetalleOrdenesController::class, 'save']);
