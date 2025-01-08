@props(['title' => null])
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full dark:bg-slate-900 dark:text-white">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}@if($title) | {{ $title }}@endif</title>

    <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="/favicon.svg" />
    <link rel="shortcut icon" href="/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
    <meta name="apple-mobile-web-app-title" content="Envflow" />
    <link rel="manifest" href="/site.webmanifest" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased h-full">
    <div class="flex flex-col h-full justify-between">
        <div>
            <x-layouts.header />
            <div class="relative mx-auto max-w-2xl px-6">
                {{ $slot }}
            </div>
        </div>
        <x-layouts.footer />
    </div>
    @livewireScripts
</body>
</html>
