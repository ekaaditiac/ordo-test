<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Module Landing</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:wght@300;400;500&display=swap" rel="stylesheet">
        
        {{-- Laravel Mix - CSS File --}}
        {{-- <link rel="stylesheet" href="{{ mix('css/landing.css') }}"> --}}
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    </head>
    <body>
        @include('partials.components.header')
        @yield('content')
        @include('partials.components.footer')
        {{-- Laravel Mix - JS File --}}
        {{-- <script src="{{ mix('js/landing.js') }}"></script> --}}
    </body>
</html>
