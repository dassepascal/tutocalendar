<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel9-vitejs</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

       @vite(['resources/css/app.css','resources/js/app.js'])
    </head>
    <body >
<div >
    @include('incs.navbar')
    @yield('content')
</div>

    </body>
</html>
