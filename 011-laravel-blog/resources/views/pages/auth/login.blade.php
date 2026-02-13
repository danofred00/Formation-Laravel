@extends('layouts.landing')

@section('title', 'Se Connecter | Laravel Blog')

@section('content')
    <h1>Connexion au site</h1>

    <form method="POST" action="/login">
        @csrf
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" required placeholder="your@domain.com">
        </div>
        <div>
            <label for="password">Mot de passe</label>
            <input type="password" name="password" required placeholder="********">
        </div>
        <div>
            <button>Se Connecter</button>
        </div>
    </form>
@endsection
