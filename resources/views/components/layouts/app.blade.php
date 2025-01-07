@props(['title' => null])
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full dark:bg-slate-900 dark:text-white">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}@if($title) | {{ $title }}@endif</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    @livewireStyles

    <!-- Styles / Scripts -->
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
