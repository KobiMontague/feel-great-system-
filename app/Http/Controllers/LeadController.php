<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Lead;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class LeadController extends Controller
{
    public function index(Request $request)
    {
        $q = Lead::query()
            ->when($request->filled('search'), function ($query) use ($request) {
                $s = $request->string('search');
                $query->where(function ($x) use ($s) {
                    $x->where('name',  'like', "%{$s}%")
                        ->orWhere('email','like', "%{$s}%")
                        ->orWhere('phone','like', "%{$s}%")
                        ->orWhere('source','like', "%{$s}%")
                        ->orWhere('status','like', "%{$s}%");
                });
            })
            ->orderByDesc('created_at');

        $leads = $q->paginate(20)->withQueryString();

        return view('admin.leads.index', compact('leads'));
    }

    public function show(Lead $lead)
    {
        return view('admin.leads.show', compact('lead'));
    }

    public function update(Request $request, Lead $lead)
    {
        // If your statuses differ, edit the array below.
        $data = $request->validate([
            'status' => ['required', Rule::in(['new','contacted','qualified','won','lost'])],
            'notes'  => ['nullable','string'],
        ]);

        $lead->update($data);

        return redirect()->route('admin.leads.show', $lead)->with('success', 'Lead updated.');
    }

    public function create()
    {
        return view('admin.leads.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:50',
            'source' => 'nullable|string|max:255',
            'status' => 'required|in:new,contacted,qualified,won,lost',
            'message' => 'nullable|string',
        ]);

        $lead = \App\Models\Lead::create($validated);

        return redirect()->route('admin.leads.show', $lead)
            ->with('success', 'Lead created successfully.');
    }

    public function destroy(Lead $lead)
    {
        $lead->delete();
        return redirect()->route('admin.leads.index')->with('success', 'Lead deleted.');
    }
}
