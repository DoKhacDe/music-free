@props(['absoluteHeader' => false])
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8"/>
    <meta name="application-name" content="{{ config('app.name') }}"/>
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    @env('local', 'staging')
        <meta name="robots" content="noindex, nofollow"/>
    @endenv

    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('/img/headphone.png') }}" type="image/x-icon">
    <title>{{ config('app.name') }} - Nghe nhạc bản quyền không quảng cáo và miễn phí</title>

    @filamentStyles
    @vite(['resources/css/app.css'])

</head>

<body class="font-sans bg-primary-50/30 min-h-screen flex flex-col antialiased bg-gradient-to-r from-primary-600/30 via-primary-200 to-secondary-400/70">

<x-shared.header :absolute="$absoluteHeader" :profile="$profileInfo ?? null"/>

<main class="grow mb-10">
    {{ $slot }}
</main>

@livewire('notifications')

@filamentScripts
@vite('resources/js/app.js')

@stack('scripts')
</body>

</html>
