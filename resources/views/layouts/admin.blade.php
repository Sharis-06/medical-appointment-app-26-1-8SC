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

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">

        @include ('layouts.includes.admin.navigation')
        @include ('layouts.includes.admin.sidebar')

        <div class="p-4 sm:ml-64 mt-14">
        <div class="p-4 border-1 border-default border-dashed rounded-base">
            <div class="grid grid-cols-3 gap-4 mb-4">
                <div class="flex items-center justify-center h-24 rounded-base bg-neutral-secondary-soft">
                    <p class="text-fg-disabled">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5"/></svg>
                    </p>
                </div>
                <div class="flex items-center justify-center h-24 rounded-base bg-neutral-secondary-soft">
                    <p class="text-fg-disabled">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5"/></svg>
                    </p>
                </div>
                <div class="flex items-center justify-center h-24 rounded-base bg-neutral-secondary-soft">
                    <p class="text-fg-disabled">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5"/></svg>
                    </p>
                </div>
            </div>
            <div class="flex items-center justify-center h-48 rounded-base bg-neutral-secondary-soft mb-4">
                <p class="text-fg-disabled">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5"/></svg>
                </p>
            </div>
            <div class="grid grid-cols-2 gap-4 mb-4">
                <div class="flex items-center justify-center h-24 rounded-base bg-neutral-secondary-soft">
                    <p class="text-fg-disabled">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5"/></svg>
                    </p>
                </div>
                <div class="flex items-center justify-center h-24 rounded-base bg-neutral-secondary-soft">
                    <p class="text-fg-disabled">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5"/></svg>
                    </p>
                </div>
                <div class="flex items-center justify-center h-24 rounded-base bg-neutral-secondary-soft">
                    <p class="text-fg-disabled">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5"/></svg>
                    </p>
                </div>
                <div class="flex items-center justify-center h-24 rounded-base bg-neutral-secondary-soft">
                    <p class="text-fg-disabled">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5"/></svg>
                    </p>
                </div>
            </div>
            <div class="flex items-center justify-center h-48 rounded-base bg-neutral-secondary-soft mb-4">
                <p class="text-fg-disabled">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5"/></svg>
                </p>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div class="flex items-center justify-center h-24 rounded-base bg-neutral-secondary-soft">
                    <p class="text-fg-disabled">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5"/></svg>
                    </p>
                </div>
                <div class="flex items-center justify-center h-24 rounded-base bg-neutral-secondary-soft">
                    <p class="text-fg-disabled">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5"/></svg>
                    </p>
                </div>
                <div class="flex items-center justify-center h-24 rounded-base bg-neutral-secondary-soft">
                    <p class="text-fg-disabled">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5"/></svg>
                    </p>
                </div>
                <div class="flex items-center justify-center h-24 rounded-base bg-neutral-secondary-soft">
                    <p class="text-fg-disabled">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5"/></svg>
                    </p>
                </div>
            </div>
        </div>
        </div>

       
        @stack('modals')
        @livewireScripts
    </body>
</html>
