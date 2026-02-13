@extends('layouts.app')

@section('main')
    <header>
        <h1>Mon Blog</h1>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/posts">Posts</a></li>
                @auth()
                    <li><a href="/dashboard">Dashboard</a></li>
                @elseguest()
                    <li><a href="/login">Login</a></li>
                @endauth
            </ul>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <p>Copyright &copy; All right reserved {{ date('Y') }}</p>
    </footer>
@endsection
