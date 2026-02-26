@props([
    'title' => config ('app.name','Laravel'), //Titulo por defecto
    'breadcrumbs' => [], //Arreglo vacio por defecto 
        ])
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ $title }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        {{-- Font Awesome CSS --}}
        <script src="https://kit.fontawesome.com/bf2462bedb.js" crossorigin="anonymous"></script>

        {{-- WireUI --}}
        <wireui:scripts />
        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased bg-gray-50">


        @include ('layouts.includes.admin.navigation')
        @include ('layouts.includes.admin.sidebar')


        <div class="p-4 sm:ml-64 mt-14">
            <div class="mt-14">
                @include('layouts.includes.admin.breadcrumb')
            </div>
            {{$slot}}
            
        </div>

        @stack('modals')
        @livewireScripts
        <script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>

    </body>
</html>
