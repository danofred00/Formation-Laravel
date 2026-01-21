<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function login(Request $request) {

        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)){
            // l utilisateur est authentifie
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }

        // echec d'autentification
        return back()->withErrors([
            'email' => 'Invalid email or password'
        ]);
    }

    public function signup(Request $request) 
    {
        $credentials = $request->validate([
            'email' => 'required|email|unique:users,email',
            'name'  => 'required|string',
            'password' => 'required|confirmed',
        ]);

        $user = new User([
            'name'  => $credentials['name'],
            'email' => $credentials['email'],
            'password'  => Hash::make($credentials['password'])
        ]);
        $user->save();

        Auth::login($user);
        $request->session()->regenerate();
        return redirect()->intended('/dashboard');
    }
}
