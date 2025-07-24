<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'Beranda' }}</title>
    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body class="bg-white text-gray-800">
    @include('components.layouts.user.header')

    {{ $slot }}

    @include('components.layouts.user.footer')

    @livewireScripts
</body>
</html>
