@extends('layouts.app')

@section('title','Create Lead')

@section('content')
    <div class="mx-auto max-w-3xl px-6 py-10">
        <a href="{{ route('admin.leads.index') }}" class="text-sm text-emerald-700 hover:underline">&larr; Back</a>
        <h1 class="mt-2 text-3xl font-bold">Add New Lead</h1>

        <div class="mt-8 rounded-xl border border-slate-200 bg-white p-8 shadow">
            <form method="POST" action="{{ route('admin.leads.store') }}" class="space-y-6">
                @csrf

                <div>
                    <label class="block text-sm font-semibold text-slate-700">Name</label>
                    <input type="text" name="name" value="{{ old('name') }}" required
                           class="mt-2 w-full rounded-lg border border-slate-300 px-4 py-3 focus:border-emerald-500 focus:ring-emerald-500">
                    @error('name') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label class="block text-sm font-semibold text-slate-700">Email</label>
                    <input type="email" name="email" value="{{ old('email') }}" required
                           class="mt-2 w-full rounded-lg border border-slate-300 px-4 py-3 focus:border-emerald-500 focus:ring-emerald-500">
                    @error('email') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                </div>

                <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                    <div>
                        <label class="block text-sm font-semibold text-slate-700">Phone</label>
                        <input type="text" name="phone" value="{{ old('phone') }}"
                               class="mt-2 w-full rounded-lg border border-slate-300 px-4 py-3 focus:border-emerald-500 focus:ring-emerald-500">
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-slate-700">Source</label>
                        <input type="text" name="source" value="{{ old('source') }}"
                               class="mt-2 w-full rounded-lg border border-slate-300 px-4 py-3 focus:border-emerald-500 focus:ring-emerald-500"
                               placeholder="e.g. Website, TikTok, QR code">
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-semibold text-slate-700">Status</label>
                    <select name="status"
                            class="mt-2 w-full rounded-lg border border-slate-300 px-4 py-3 focus:border-emerald-500 focus:ring-emerald-500">
                        @foreach (['new','contacted','qualified','won','lost'] as $s)
                            <option value="{{ $s }}" @selected(old('status')===$s)>{{ ucfirst($s) }}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-semibold text-slate-700">Message</label>
                    <textarea name="message" rows="5"
                              class="mt-2 w-full rounded-lg border border-slate-300 px-4 py-3 focus:border-emerald-500 focus:ring-emerald-500">{{ old('message') }}</textarea>
                </div>

                <div class="flex justify-end">
                    <button type="submit"
                            class="rounded-xl bg-emerald-600 px-6 py-3 text-white font-semibold shadow hover:bg-emerald-700">
                        Save Lead
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
