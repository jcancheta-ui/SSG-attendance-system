<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Simple Inline Styles so it looks great immediately -->
        <style>
            body { font-family: 'Figtree', sans-serif; background-color: #f3f4f6; margin: 0; padding: 0; display: flex; justify-content: center; align-items: center; height: 100vh; }
            .card { background: white; padding: 2rem; border-radius: 0.5rem; box-shadow: 0 4px 6px rgba(0,0,0,0.1); width: 100%; max-width: 400px; }
        </style>
    </head>
    <body>
        <div class="card">
            {{ $slot }}
        </div>
    </body>
</html>