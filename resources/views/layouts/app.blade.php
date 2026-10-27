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

        <style>
            body { font-family: 'Figtree', sans-serif; background-color: #f3f4f6; margin: 0; padding: 0; }
            nav { background-color: #ffffff; border-bottom: 1px solid #e5e7eb; padding: 1rem 2rem; display: flex; justify-content: space-between; align-items: center; }
            nav a { color: #374151; text-decoration: none; font-weight: 600; margin-right: 1rem; }
            .container { max-width: 1200px; margin: 2rem auto; padding: 0 1rem; }
            .card { background: white; padding: 2rem; border-radius: 0.5rem; box-shadow: 0 1px 3px rgba(0,0,0,0.1); }
            .btn-logout { background: #ef4444; color: white; border: none; padding: 0.5rem 1rem; border-radius: 0.375rem; cursor: pointer; }
        </style>
    </head>
    <body>
        <nav>
            <div>
                <strong>SPAMAST SSG Attendance System</strong>
            </div>
            <div style="display: flex; align-items: center;">
                <span style="margin-right: 15px;">Welcome, <strong>{{ Auth::user()->name }}</strong></span>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn-logout">Log Out</button>
                </form>
            </div>
        </nav>

        <div class="container">
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>