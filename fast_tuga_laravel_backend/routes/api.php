<?php

use App\Http\Controllers\Api\CustomerController;
use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\api\AuthController;


Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->middleware('auth:api');

Route::apiResource('products', ProductController::class, ['names'=>'products']);
Route::apiResource('orders', OrderController::class, ['names'=>'orders']);
Route::apiResource('customers', CustomerController::class, ['names'=>'customers']);
