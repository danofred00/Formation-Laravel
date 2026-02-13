<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/posts', [HomeController::class, 'posts']);

Route::get('/login', [AuthController::class, 'login']);
Route::post('/login', [AuthController::class, 'process_login']);

Route::get('/register', [AuthController::class, 'register']);

// ON regroupe toutes les routes qui commencent par /dashboard
Route::middleware(['auth', 'auth.session'])->group(function () {

    Route::prefix('dashboard')->group(function () {

    // /dashboard/
    Route::get('/', [DashboardController::class, 'index']);

    // GET /dashboard/posts -> lister les posts
    Route::get('/posts', [PostController::class, 'index']);

    // GET /dashboard/posts/create -> creer un post
    // GET /dashboard/posts/{postId} -> Acceder a un post
    // GET /dashboard/posts/{postId}/edit -> editer un post
    // DELETE /dashboard/posts/{postId}
});

});
