<!Doctype html>
<html>

    @include('partials.head')

    <body>
        <main class="container min-vh-100 d-flex flex-column gap-3 justify-content-center align-items-center">
            <h1 class="text-center">@yield('formTitle', 'Login')</h1>
            @yield('content')
        </main>

        @include('partials.script')
    </body>
</html>