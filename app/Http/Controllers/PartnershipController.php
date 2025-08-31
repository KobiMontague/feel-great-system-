<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use App\Notifications\PartnershipLeadNotification;
use App\Notifications\PartnershipLeadThanks;

class PartnershipController extends Controller
{
    public function index()
    {
        return view('partnership');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name'    => ['required', 'string', 'max:120'],
            'email'   => ['required', 'email', 'max:255'],
            'phone'   => ['required', 'string', 'max:40'],
            'company' => ['nullable', 'max:120'], // honeypot
        ]);

        // Simple honeypot: if filled, pretend success
        if (!empty($data['company'])) {
            return back()->with('success', 'Thanks — we’ve received your details.');
        }

        // Look up by email
        $existing = Lead::where('email', $data['email'])->first();

        if ($existing) {
            // Keep the original created_at and update other fields
            $firstCreated = $existing->created_at;

            $existing->fill([
                'name'       => $data['name'],
                'phone'      => $data['phone'],
                'ip'         => $request->ip(),
                'user_agent' => (string) $request->header('User-Agent'),
            ])->save();

            // Format the original date for the banner
            $when = $firstCreated
                ? $firstCreated->timezone(config('app.timezone', 'UTC'))->format('j M Y')
                : now()->timezone(config('app.timezone', 'UTC'))->format('j M Y');

            return back()->with(
                'success',
                "Thanks — we already have your enquiry from {$when}. We’ve updated this request."
            );
        }

        // New lead
        Lead::create([
            'name'       => $data['name'],
            'email'      => $data['email'],
            'phone'      => $data['phone'],
            'ip'         => $request->ip(),
            'user_agent' => (string) $request->header('User-Agent'),
        ]);

        return back()->with('success', 'Thanks — we’ve received your details.');
    }
}
