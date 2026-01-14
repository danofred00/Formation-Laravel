<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        return view('pages.index', [
            'currentPage' => 'home',
        ]);
    }

    public function contact()
    {
        return view('pages.contact', [
            'currentPage' => 'contact',
        ]);
    }
}
