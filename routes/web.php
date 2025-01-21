<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;


Route::get('/api/products', [ProductController::class, 'index']);
Route::get('/api/products/{category}', [ProductController::class, 'category']);
Route::get('/api/images', [ProductController::class, 'index']);
Route::get('/api/categories', [ProductController::class, 'getCategories']);


Route::get('/{any?}', function () {
    return view('welcome');
})->where('any', '^(?!storage).*$');




