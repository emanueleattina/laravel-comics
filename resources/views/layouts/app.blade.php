<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Comics</title>

        <!-- Fonts -->

        <!-- Styles -->
        
    </head>
    <body>
        @include('partials.header')
        <main>
            @yield('main')
        </main>
        @include('partials.footer')
        <script src="/js/app.js"></script>
    </body>
</html>