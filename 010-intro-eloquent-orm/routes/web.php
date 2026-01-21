<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;

Route::get('/', [HomePageController::class, 'index']);

Route::get('/products', [ProductController::class, 'index']);

Route::get('/login', [HomePageController::class, 'login']);

Route::get('/signup', [HomePageController::class, 'signup']);

Route::get('/dashboard', [HomePageController::class, 'dashboard'])->middleware('auth');

Route::post('/login', [AuthController::class, 'login']);

Route::post('/signup', [AuthController::class, 'signup']);
