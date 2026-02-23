<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? config('app.name') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
</head>

<body class="bg-(--color-surface)">
    <x-ui.layout>
        @include('custom.sidebar')
        <x-ui.layout.main>
            @include('custom.header')

            <div class="p-6">
                {{ $slot }}
            </div>

            <x-ui.toast position="bottom-right" maxToasts="5" />
        </x-ui.layout.main>
    </x-ui.layout>

    @livewireScripts
</body>

</html>
