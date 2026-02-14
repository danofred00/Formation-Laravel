<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $posts = Post::count();

        return view('pages.dashboard.index', [
            'posts' => $posts
        ]);
    }
}
