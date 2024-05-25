<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/products', [ProductsController::class, 'index']);
Route::post('/products/store', [ProductsController::class, 'store']);
Route::put('/products/update/{id}', [ProductsController::class, 'update']);
Route::delete('/products/delete/{id}', [ProductsController::class, 'destroy']);