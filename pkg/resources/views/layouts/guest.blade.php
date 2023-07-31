<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Gemeinsam gegen Corona 🤝 Lassen Sie sich noch heute testen">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

    @livewireStyles
</head>
<body>
<div class="font-sans text-gray-900 antialiased h-screen bg-gray-100 flex flex-col justify-between">
    {{ $slot }}
</div>
@livewireScripts
</body>
</html>
