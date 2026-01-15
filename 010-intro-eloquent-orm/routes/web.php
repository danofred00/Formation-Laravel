<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\ProductController;

Route::get('/', [HomePageController::class, 'index']);

Route::get('/products', [ProductController::class, 'index']);
