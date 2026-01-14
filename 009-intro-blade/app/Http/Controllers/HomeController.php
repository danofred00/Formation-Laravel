<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        $age = 17;
        $products = [
            ['name' => 'Product 1', 'price' => 100],
            ['name' => 'Product 2', 'price' => 200],
            ['name' => 'Product 3', 'price' => 300],
        ];

        return view('home', [
            'age' => $age,
            'products' => $products
        ]);
    }
}
