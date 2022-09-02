<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title', .' - '. config('app.name'))</title>
        <meta name="CSRF_TOKEN" content="{{ csrf_field() }}">
    </head>
    <body class="antialiased">
        <main id="app"></main>

        @vite(['resources/app.js'])
    </body>
</html>
