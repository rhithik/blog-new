<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body class="bg-gray-900">
        <nav class="bg-gray-50 flex justify-around border-b-2">
            <div>
                <ul class="flex p-2">
                    <li class="pr-2">Logo</li>
                    <li>Dashboard</li>
                </ul>
            </div>
            <div>
                <ul class="flex p-2">
                    <li class="pr-2">Login</li>
                    <li>Register</li>
                </ul>
            </div>
        </nav>
        <div class="h-screen bg-gray-50 mt-4 max-w-3xl p-6 mx-auto">
            <h1>stuff</h1>
        </div>
    </body>
</html>
