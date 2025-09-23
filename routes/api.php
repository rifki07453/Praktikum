<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/{id}', [ProductController::class, 'show']);