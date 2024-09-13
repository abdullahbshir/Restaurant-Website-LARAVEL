<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/Contact', [HomeController::class, 'contact']);
Route::get('/Service', [HomeController::class, 'service']);
