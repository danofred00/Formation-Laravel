<!Doctype html>
<html>

    @include('partials.head')

    <body>
        @include('partials.header')

        <main>
            @yield('content')
        </main>

        @include('partials.footer')
        @include('partials.script')
    </body>
</html>