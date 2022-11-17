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
Route::delete('api/categorias/eliminar', [App\Http\Controllers\CategoriasController::class, 'delete']);
Route::get('api/categorias/index', [App\Http\Controllers\CategoriasController::class, 'index']);
Route::get('api/categorias/getSelect', [App\Http\Controllers\CategoriasController::class, 'getSelect']);

//Rutas de proveedores
Route::post('api/proveedores/guardar', [App\Http\Controllers\ProveedoresController::class, 'save']);
Route::put('api/proveedores/actualizar', [App\Http\Controllers\ProveedoresController::class, 'update']);
Route::delete('api/proveedores/eliminar', [App\Http\Controllers\ProveedoresController::class, 'delete']);
Route::get('api/proveedores/index', [App\Http\Controllers\ProveedoresController::class, 'index']);
Route::get('api/proveedores/getSelect', [App\Http\Controllers\ProveedoresController::class, 'getSelect']);

//Rutas de clientes
Route::post('api/clientes/guardar', [App\Http\Controllers\ClientesController::class, 'save']);
Route::put('api/clientes/actualizar', [App\Http\Controllers\ClientesController::class, 'update']);
Route::delete('api/clientes/eliminar', [App\Http\Controllers\ClientesController::class, 'delete']);
Route::get('api/clientes/index', [App\Http\Controllers\ClientesController::class, 'index']);
Route::get('api/clientes/getSelect', [App\Http\Controllers\ClientesController::class, 'getSelect']);

//Rutas de productos
Route::post('api/productos/guardar', [App\Http\Controllers\ProductosController::class, 'save']);
Route::put('api/productos/actualizar', [App\Http\Controllers\ProductosController::class, 'update']);
Route::delete('api/productos/eliminar', [App\Http\Controllers\ProductosController::class, 'delete']);
Route::get('api/productos/index', [App\Http\Controllers\ProductosController::class, 'index']);
Route::get('api/productos/getSelect', [App\Http\Controllers\ProductosController::class, 'getSelect']);


//Rutas ordenes
Route::post('api/ordenes/guardar', [App\Http\Controllers\OrdenesController::class, 'save']);
Route::put('api/ordenes/actualizar', [App\Http\Controllers\OrdenesController::class, 'update']);
Route::delete('api/ordenes/eliminar', [App\Http\Controllers\OrdenesController::class, 'delete']);
Route::get('api/ordenes/index', [App\Http\Controllers\OrdenesController::class, 'index']);
Route::get('api/ordenes/getSelect', [App\Http\Controllers\OrdenesController::class, 'getSelect']);

//Detalle_orden
Route::post('api/detalle_ordenes/guardar', [App\Http\Controllers\DetalleOrdenesController::class, 'save']);
Route::put('api/detalle_ordenes/actualizar', [App\Http\Controllers\DetalleOrdenesController::class, 'update']);
Route::delete('api/detalle_ordenes/eliminar', [App\Http\Controllers\DetalleOrdenesController::class, 'delete']);
Route::get('api/detalle_ordenes/index', [App\Http\Controllers\DetalleOrdenesController::class, 'index']);
Route::get('api/detalle_ordenes/getSelect', [App\Http\Controllers\DetalleOrdenesController::class, 'getSelect']);



