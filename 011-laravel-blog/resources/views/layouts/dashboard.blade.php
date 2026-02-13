@extends('layouts.app')

@section('main')

    <header>
        <h1>Mon Dashboard</h1>
        <nav>
            <ul>
                <li><a href="/dashboard">Dashboard</a></li>
                <li><a href="/dashboard/posts">Mes posts</a></li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>
@endsection
