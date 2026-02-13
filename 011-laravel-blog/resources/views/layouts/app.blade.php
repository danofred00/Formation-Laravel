<!DOCTYPE>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title', "Laravel Blog")</title>

        @include('components.style')

    </head>

    <body>
        @yield('main')
        @include('components.script')
    </body>
</html>
