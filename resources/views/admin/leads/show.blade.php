@extends('layouts.app')

@section('title','Lead #'.$lead->id)

@section('content')
    <div class="mx-auto max-w-3xl px-6 py-10">
        @if (session('success'))
            <div class="mb-4 rounded-lg border border-emerald-200 bg-emerald-50 p-3 text-emerald-800">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('admin.leads.index') }}" class="text-sm text-emerald-700">&larr; Back</a>
        <h1 class="mt-2 text-2xl font-bold">Lead #{{ $lead->id }}</h1>

        <div class="mt-6 grid gap-4">
            <!-- Lead info -->
            <div class="rounded-xl border border-slate-200 bg-white p-4 text-sm">
                <div class="grid md:grid-cols-2 gap-3">
                    <div><span class="font-semibold">Name: </span>{{ $lead->name }}</div>
                    <div><span class="font-semibold">Email: </span>{{ $lead->email }}</div>
                    <div><span class="font-semibold">Phone: </span>{{ $lead->phone ?? '—' }}</div>
                    <div><span class="font-semibold">Source: </span>{{ $lead->source ?? '—' }}</div>
                    <div><span class="font-semibold">Status: </span>{{ $lead->status }}</div>
                    <div><span class="font-semibold">Created: </span>{{ optional($lead->created_at)->format('Y-m-d H:i') }}</div>
                </div>

                <div class="mt-4">
                    <span class="font-semibold">Message:</span>
                    <p class="mt-1 text-slate-700 whitespace-pre-wrap">{{ $lead->message ?? '—' }}</p>
                </div>
            </div>

            <!-- Admin update form (status + notes) -->
            <div class="rounded-xl border border-slate-200 bg-white p-4">
                <form method="POST" action="{{ route('admin.leads.update', $lead) }}" class="space-y-4">
                    @csrf
                    @method('PUT')

                    <div>
                        <label class="block text-sm font-medium">Status</label>
                        <select name="status" class="mt-1 w-full rounded-lg border-slate-300 px-3 py-2">
                            @foreach (['new','contacted','qualified','won','lost'] as $s)
                                <option value="{{ $s }}" @selected($lead->status === $s)>{{ ucfirst($s) }}</option>
                            @endforeach
                        </select>
                        @error('status') <p class="text-sm text-red-600">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-medium">Notes (admin only)</label>
                        <textarea name="notes" rows="6" class="mt-1 w-full rounded-lg border-slate-300 px-3 py-2">{{ old('notes', $lead->notes) }}</textarea>
                    </div>

                    <button type="submit"
                            class="rounded-xl bg-emerald-600 px-5 py-2.5 text-white font-semibold hover:bg-emerald-700">
                        Save
                    </button>
                </form>
            </div>

            <!-- Delete form (separate, not nested) -->
            <div class="rounded-xl border border-red-200 bg-red-50 p-4">
                <form method="POST" action="{{ route('admin.leads.destroy', $lead) }}"
                      onsubmit="return confirm('Delete this lead? This cannot be undone.');" class="inline">
                    @csrf
                    @method('DELETE')
                    <button class="rounded-xl bg-red-600 px-4 py-2.5 text-white font-semibold hover:bg-red-700">
                        Delete Lead
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
