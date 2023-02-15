<?php

use App\Http\Controllers\DishController;
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
Route::get('/dishes', [DishController::class, 'index']);
Route::get('/dishes/search/{title}', [DishController::class, 'search']);
Route::get('/dishes/archive', [DishController::class, 'archive']);
Route::get('/dishes/{id}', [DishController::class, 'show']);

Route::post('/dishes', [DishController::class, 'store']);
Route::put('/dishes/{id}', [DishController::class, 'update']);
Route::post('/dishes/{id}/restore', [DishController::class, 'restore']);

Route::delete('/dishes/{id}', [DishController::class, 'delete']);
Route::delete('/dishes/{id}/force_delete', [DishController::class, 'forceDelete']);

/*
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
*/