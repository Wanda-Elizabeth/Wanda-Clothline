<?php

use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactFormDetailsController;
use App\Http\Controllers\ImageUploadController;
Route::post('/contact/submit', [ContactFormDetailsController::class, 'sendEmail']);

Route::get('/contact/get-submit', [ContactFormDetailsController::class, 'getSubmittedForms']);

Route::post('/upload', [ImageUploadController::class, 'upload']);

Route::get('/products/{category}', [ProductController::class, 'category']);

Route::get('/images', [ProductController::class, 'index']);

Route::get('/categories', [ProductController::class, 'getCategories']);

