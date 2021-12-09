<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <title> @yield('title')</title>

        
    </head>
    <body class="py-6 flex flex-col justify-between items-center min-h-screen">
        <main role="main">
            @yield('content')
        </main>
       
        @include('layout.partials.footer')    
</body>
</html>
