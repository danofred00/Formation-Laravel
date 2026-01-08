<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    function index() {
        return view('home');
    }

    function about() {
        return view('about');
    }

    function contact() {

        $email = "danofred00@gmail.com";
        $tel = "+237 652 88 85 29";
        $address = "Douala, Cameroon";

        return view('contact', [
            'email' => $email,
            'tel' => $tel,
            'address' => $address
        ]);
    }
}
