<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//API

//Clientes
Route::post('/clientes/signup', [App\Http\Controllers\ClienteController::class, 'storeApi']);
Route::post('/clientes/signin', [App\Http\Controllers\ClienteController::class, 'loginApi']);

//Compras 
Route::post('/compras/listar', [App\Http\Controllers\CompraController::class, 'indexApi']);
Route::post('/compras/añadir', [App\Http\Controllers\CompraController::class, 'storeApi']);
Route::put('/compras/editar', [App\Http\Controllers\CompraController::class, 'updateApi']);
Route::delete('/compras/eliminar', [App\Http\Controllers\CompraController::class, 'destroyApi']);
Route::post('/compras/confirmarCompra', [App\Http\Controllers\CompraController::class, 'confirmarCompraApi']);

//HistorialCompras
Route::post('/historialCompras', [App\Http\Controllers\HistorialCompraController::class, 'indexApi']);

//Productos
Route::get('/productos', [App\Http\Controllers\ProductoController::class, 'indexApi']);

//Marcas
Route::get('/marcas', [App\Http\Controllers\MarcaController::class, 'indexApi']);

//Tipos
Route::get('/tipos', [App\Http\Controllers\TipoController::class, 'indexApi']);

//Talles
Route::get('/talles', [App\Http\Controllers\TalleController::class, 'indexApi']);