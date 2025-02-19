<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="cupcake">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>ImpactHub{{ $title ? ' - '.$title : '' }}</title>
        <meta name="description" content="{{ $description ?? '' }}">
        <meta name="keywords" content="{{ $keywords ?? '' }}">


        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
    </head>
   <body class="min-h-screen font-sans antialiased">
        @if($admin ?? false)
            <x-nav.admin />
        @elseif(auth()->check())
            <x-nav.game />
        @else
            <x-nav.guest />
        @endif
   {{$slot}}

        <footer class="bg-gray-100 dark:bg-gray-800">
            <div class="container flex items-center justify-between px-6 py-3 mx-auto">
                <a href="#" class="text-xl font-bold text-white hover:text-gray-200">{{ $settings->appName }}</a>
                <p class="py-2 text-white sm:py-0">All rights reserved</p>
            </div>
        </footer>
        <x-toast />
        <x-pbs />
        @livewireScripts
    </body>
</html>
