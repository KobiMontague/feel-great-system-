<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Feel Great System by Unicity')</title>
    <meta name="description" content="@yield('meta_description', 'Two products + one practice. Unimate + Balance with time-based eating to support energy, focus, and metabolic health.')">
    <meta property="og:title" content="@yield('og_title', 'Feel Great System by Unicity')">
    <meta property="og:description" content="@yield('og_description', 'Unimate + Balance + time-based eating. Simple daily routine; measurable results.')">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ config('app.url') ?? url('/') }}">

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
