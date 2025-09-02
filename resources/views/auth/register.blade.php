@extends('layouts.app')

@section('title','Register')

@section('content')
    <div class="mx-auto max-w-md px-6 py-12">
        <h1 class="text-2xl font-bold">Create account</h1>

        @if ($errors->any())
            <div class="mt-4 rounded-lg border border-red-200 bg-red-50 p-3 text-sm text-red-700">
                {{ $errors->first() }}
            </div>
        @endif

        <form class="mt-6 space-y-4" method="POST" action="{{ route('register') }}">
            @csrf
            <div>
                <label class="block text-sm font-medium">Name</label>
                <input name="name" value="{{ old('name') }}" required class="mt-1 w-full rounded-lg border-slate-300">
            </div>
            <div>
                <label class="block text-sm font-medium">Email</label>
                <input type="email" name="email" value="{{ old('email') }}" required class="mt-1 w-full rounded-lg border-slate-300">
            </div>
            <div>
                <label class="block text-sm font-medium">Password</label>
                <input type="password" name="password" required class="mt-1 w-full rounded-lg border-slate-300">
                <p class="mt-1 text-xs text-slate-500">At least 8 characters.</p>
            </div>
            <div>
                <label class="block text-sm font-medium">Confirm Password</label>
                <input type="password" name="password_confirmation" required class="mt-1 w-full rounded-lg border-slate-300">
            </div>

            <button class="w-full rounded-xl bg-emerald-600 px-4 py-2.5 text-white font-semibold hover:bg-emerald-700">
                Create account
            </button>
        </form>
    </div>
@endsection
