<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function posts()
    {
        $posts = Post::all();
        
        return view('pages.posts', [
            'posts' => $posts
        ]);
    }
}
