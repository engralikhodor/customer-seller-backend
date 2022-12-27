<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\TaskController;

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
/*------------------------------------------*/
Route::prefix('seller')->group(function () {
    Route::post('/', [SellerController::class, 'create']);
    Route::get('/', [SellerController::class, 'getAll']);
    Route::get('/{id}', [SellerController::class, 'get']);
    Route::delete('/{id}', [SellerController::class, 'delete']);
    Route::put('/{id}', [SellerController::class, 'update']);
});
/*------------------------------------------*/
Route::prefix('customer')->group(function () {
    Route::post('/', [CustomerController::class, 'create']);
    Route::get('/', [CustomerController::class, 'getAll']);
    Route::get('/{id}', [CustomerController::class, 'get']);
    Route::delete('/{id}', [CustomerController::class, 'delete']);
    Route::put('/{id}', [CustomerController::class, 'update']);
});
/*------------------------------------------*/
Route::prefix('task')->group(function () {
    Route::post('/', [TaskController::class, 'create']);
    Route::get('/', [TaskController::class, 'getAll']);
    Route::get('/{id}', [TaskController::class, 'get']);
    Route::delete('/{id}', [TaskController::class, 'delete']);
    Route::put('/{id}', [TaskController::class, 'update']);
});
/*------------------------------------------*/
