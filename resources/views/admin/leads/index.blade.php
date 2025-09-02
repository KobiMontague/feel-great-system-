@extends('layouts.app')

@section('title','Leads')

@section('content')
    <div class="mx-auto max-w-6xl px-6 py-10">
        @if (session('success'))
            <div class="mb-4 rounded-lg border border-emerald-200 bg-emerald-50 p-3 text-emerald-800">
                {{ session('success') }}
            </div>
        @endif

        <div class="flex items-center justify-between mb-6">
            <h1 class="text-3xl font-bold">Leads</h1>
            <a href="{{ route('admin.leads.create') }}"
               class="rounded-xl bg-emerald-600 px-5 py-2.5 text-white font-semibold hover:bg-emerald-700">
                + Add Lead
            </a>
        </div>

        @if($leads->isEmpty())
            <p class="text-slate-600">No leads yet.</p>
        @else
            <div class="overflow-x-auto rounded-xl border border-slate-200 bg-white shadow">
                <table class="min-w-full divide-y divide-slate-200 text-sm">
                    <thead class="bg-slate-100">
                    <tr>
                        <th class="px-4 py-3 text-left font-semibold text-slate-700">ID</th>
                        <th class="px-4 py-3 text-left font-semibold text-slate-700">Name</th>
                        <th class="px-4 py-3 text-left font-semibold text-slate-700">Email</th>
                        <th class="px-4 py-3 text-left font-semibold text-slate-700">Phone</th>
                        <th class="px-4 py-3 text-left font-semibold text-slate-700">Status</th>
                        <th class="px-4 py-3 text-left font-semibold text-slate-700">Notes</th>
                        <th class="px-4 py-3 text-left font-semibold text-slate-700">Created</th>
                        <th class="px-4 py-3"></th>
                    </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-200">
                    @foreach($leads as $lead)
                        <tr>
                            <td class="px-4 py-3">{{ $lead->id }}</td>
                            <td class="px-4 py-3">{{ $lead->name }}</td>
                            <td class="px-4 py-3">{{ $lead->email }}</td>
                            <td class="px-4 py-3">{{ $lead->phone ?? '—' }}</td>
                            <td class="px-4 py-3 capitalize">{{ $lead->status }}</td>
                            <td class="px-4 py-3 max-w-xs truncate" title="{{ $lead->notes }}">
                                {{ Str::limit($lead->notes, 40) ?? '—' }}
                            </td>
                            <td class="px-4 py-3">{{ $lead->created_at->format('Y-m-d') }}</td>
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('admin.leads.show',$lead) }}"
                                   class="text-sm font-semibold text-emerald-700 hover:underline">
                                    View
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

            <div class="mt-6">
                {{ $leads->links() }}
            </div>
        @endif
    </div>
@endsection
