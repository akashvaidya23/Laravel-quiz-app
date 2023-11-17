<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Quiz App</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    </head>
    <body>
        <div id="header">
            <li>The Quiz App</li>
        </div>
        <div id="quiz_start">
            <img src="{{ asset('images/banner-img.png') }}" alt="Base Image" width="500" height="500">
            <br>
            <a class="button" href="/select-sector">Start Game</a>
        </div>
    </body>
</html>
