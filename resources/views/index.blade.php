<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script> window.Laravel = { csrfToken: '{{ csrf_token() }}' }</script>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css')}}">
    </head>
    <body>
        <div class="container" id="app">
            <adv-notes/>
        </div>
        <script src="{{ mix('js/app.js')}}"></script>
    </body>
</html>
