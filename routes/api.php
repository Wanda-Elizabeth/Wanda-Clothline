<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactFormDetailsController;

Route::post('/contact/submit', [ContactFormDetailsController::class, 'sendEmail']);

Route::get('/contact/get-submit', [ContactFormDetailsController::class, 'getSubmittedForms']);

