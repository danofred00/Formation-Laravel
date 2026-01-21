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

    public function login()
    {
        return view('pages.auth.login');
    }

    public function signup()
    {
        return view('pages.auth.signup');
    }

    public function dashboard()
    {
        return view('pages.dashboard.index');
    }
}
