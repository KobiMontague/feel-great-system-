<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Primary Meta -->
    <title>@yield('title', 'Feel Great System – Natural Support for Metabolic Health')</title>
    <meta name="description" content="@yield('meta_description', 'A simple daily routine pairing Unimate and Balance (Bios Life S) with intermittent fasting to support focus, energy, hunger control, and metabolic health.')">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('og_title', 'Feel Great System – Natural Support for Metabolic Health')">
    <meta property="og:description" content="@yield('og_description', 'Support your energy, focus, hunger control, and blood sugar naturally. Backed by Unicity research and listed in the PDR.')">
    <meta property="og:image" content="{{ asset('images/Unicity/feel-great-lemon.png') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="@yield('twitter_title', 'Feel Great System – Natural Support for Metabolic Health')">
    <meta property="twitter:description" content="@yield('twitter_description', 'A natural, daily system to support metabolic health. No injections. No harsh side effects.')">
    <meta property="twitter:image" content="{{ asset('images/Unicity/feel-great-lemon.png') }}">

    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Robots -->
    <meta name="robots" content="index, follow">

    <link rel="icon" href="{{ asset('favicon.ico') }}">

    <script src="https://cdn.tailwindcss.com"></script>
    @stack('head')
</head>
<body class="bg-slate-50 text-slate-900 antialiased">
@include('layouts.nav')

{{-- Announcement bar --}}
<div class="bg-emerald-600 text-white text-center py-2 text-sm">
    Two products + one practice = a simpler way to feel great.
</div>

<main>
    @yield('content')
</main>

@include('layouts.footer')
@stack('scripts')
</body>
</html>
