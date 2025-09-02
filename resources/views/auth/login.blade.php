@extends('layouts.app')

@section('title','Login')

@section('content')
    <div class="mx-auto max-w-md px-6 py-12">
        <h1 class="text-3xl font-bold text-center">Log in</h1>

        @if ($errors->any())
            <div class="mt-4 rounded-lg border border-red-200 bg-red-50 p-3 text-sm text-red-700">
                {{ $errors->first() }}
            </div>
        @endif

        <form class="mt-8 space-y-6" method="POST" action="{{ route('login') }}">
            @csrf
            <div>
                <label class="block text-sm font-medium text-slate-700">Email</label>
                <input type="email" name="email" value="{{ old('email') }}" required
                       class="mt-2 w-full rounded-lg border border-slate-300 px-4 py-3 text-base focus:border-emerald-500 focus:ring-emerald-500">
            </div>
            <div>
                <label class="block text-sm font-medium text-slate-700">Password</label>
                <input type="password" name="password" required
                       class="mt-2 w-full rounded-lg border border-slate-300 px-4 py-3 text-base focus:border-emerald-500 focus:ring-emerald-500">
            </div>

            <div class="flex items-center justify-between">
                <label class="flex items-center gap-2 text-sm text-slate-600">
                    <input type="checkbox" name="remember" class="rounded border-slate-300 text-emerald-600 focus:ring-emerald-500">
                    Remember me
                </label>
            </div>

            <button class="w-full rounded-xl bg-emerald-600 px-6 py-3 text-white font-semibold text-lg shadow hover:bg-emerald-700 transition">
                Log in
            </button>
        </form>
    </div>
@endsection
