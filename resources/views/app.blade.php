<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Aclonica&family=Borel&family=Bungee+Spice&family=Comfortaa&family=Croissant+One&family=Dongle:wght@400;700&family=Gabriela&family=Gaegu&family=Indie+Flower&family=Lobster&family=Lobster+Two&family=Outfit&family=Poppins:wght@200;300;400&family=Quicksand:wght@500&family=Rubik&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead
    </head>
    <body style="font-family: 'Quicksand', sans-serif;">
        @inertia
    </body>
</html>
