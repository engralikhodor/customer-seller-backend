<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SellerController;

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


Route::prefix('seller')->group(function () {
    Route::post('/', [SellerController::class, 'createSeller']);
    Route::get('/', [SellerController::class, 'getAllSellers']);
    Route::get('/{id}', [SellerController::class, 'getByID']);
    Route::delete('/{id}', [SellerController::class, 'deleteByID']);
    Route::put('/{id}', [SellerController::class, 'updateByID']);
});


Route::prefix('customer')->group(function () {
    Route::post('/', [CustomerController::class, 'createCustomer']);
    Route::get('/', [CustomerController::class, 'getAllCustomers']);
    Route::get('/{id}', [CustomerController::class, 'getByID']);
    Route::delete('/{id}', [CustomerController::class, 'deleteByID']);
    Route::put('/{id}', [CustomerController::class, 'updateByID']);
});

//test