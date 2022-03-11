<?php

use App\Http\Controllers\CategoriaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('categoria', [CategoriaController::class, 'getCategoria']);

Route::get('categoria/{id}', [CategoriaController::class, 'getCategoriaId']);

Route::post('addCategoria', [CategoriaController::class, 'insertCategoria']);

Route::put('updateCategoria/{id}', [CategoriaController::class, 'updateCategoria']);

Route::delete('deleteCategoria/{id}', [CategoriaController::class, 'deleteCategoria']);
