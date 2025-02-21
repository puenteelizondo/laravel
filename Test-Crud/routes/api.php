<?php

use App\Http\Controllers\CRUDController;
use Illuminate\Support\Facades\Route;

Route::post('/products', [CRUDController::class, 'createProduct']);

Route::get('/products/all', [CRUDController::class, 'getAllProducts']);

Route::get('/products',[CRUDController::class, 'getProduct']);

Route::put('/product',[CRUDController::class, 'updateProduct']);

Route::delete('/product', [CRUDController::class, 'deleteProduct']);


