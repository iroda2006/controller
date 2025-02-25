<?php

/*Route::get('/', function () {
    return view('welcome');
});*/


use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/products', [ProductController::class, 'index']);

Route::get('/products/create', [ProductController::class, 'create']);

Route::get('/products/{id}', [ProductController::class, 'show']);

Route::get('/products/{id}/edit', [ProductController::class, 'edit']);

Route::delete('/products/{id}', [ProductController::class, 'destroy']);

Route::get('/products/search', [ProductController::class, 'search']);
