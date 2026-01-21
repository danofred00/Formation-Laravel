<!Doctype html>
<html>

    @include('partials.head')

    <body>
        @include('partials.header')

        <main class="min-vh-100">
            @yield('content')
        </main>

        @include('partials.footer')
        @include('partials.script')
    </body>
</html>