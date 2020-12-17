<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>@yield('title', config('app.name'))</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

      
    </head>
    <body class="py-6 flex flex-col justify-between items-center min-h-screen">
        <main class="flex flex-col justify-center items-center">
            @yield('content')
        </main>
       
        <footer>
            <p class="text-gray-400">
                &copy; Copyright {{date('Y')}} 

                @if (! Route::is('about'))
                &middot; <a class="text-red-500 hover:text-red-600 underline" href="{{route('about')}}">About Us</a>
                @endif
               
            </p>
        </footer>
    </body>
</html>
