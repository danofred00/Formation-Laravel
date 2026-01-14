<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomePageController;

Route::get('/', [HomePageController::class, 'index']);

Route::get('/contact', [HomePageController::class, 'contact']);