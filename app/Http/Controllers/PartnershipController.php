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

        // Honeypot: if filled, pretend success (do not send emails)
        if (!empty($data['company'])) {
            return back()->with('success', 'Thanks — we’ve received your details.');
        }

        // Find by email
        $existing = Lead::where('email', $data['email'])->first();

        // Admin email to notify
        $adminEmail = env('PARTNERSHIP_NOTIFY_EMAIL', config('mail.from.address'));

        if ($existing) {
            $firstCreated = $existing->created_at;

            $existing->fill([
                'name'       => $data['name'],
                'phone'      => $data['phone'],
                'ip'         => $request->ip(),
                'user_agent' => (string) $request->header('User-Agent'),
            ])->save();

            // 👉 Send notification that an existing lead updated (optional but useful)
            if ($adminEmail) {
                Notification::route('mail', $adminEmail)
                    ->notify(new PartnershipLeadNotification($existing));
            }

            $when = $firstCreated
                ? $firstCreated->timezone(config('app.timezone', 'UTC'))->format('j M Y')
                : now()->timezone(config('app.timezone', 'UTC'))->format('j M Y');

            // 👉 Thank the lead (optional for updates; keep if you want)
            Notification::route('mail', $existing->email)
                ->notify(new PartnershipLeadThanks($existing));

            return back()->with(
                'success',
                "Thanks — we already have your enquiry from {$when}. We’ve updated this request."
            );
        }

        // New lead
        $lead = Lead::create([
            'name'       => $data['name'],
            'email'      => $data['email'],
            'phone'      => $data['phone'],
            'ip'         => $request->ip(),
            'user_agent' => (string) $request->header('User-Agent'),
            // If you added these columns, they’ll save too (safe to leave if not):
            'status'     => 'new',
            'notes'      => null,
        ]);

        // 👉 Notify admin
        if ($adminEmail) {
            Notification::route('mail', $adminEmail)
                ->notify(new PartnershipLeadNotification($lead));
        }

        // 👉 Thank the lead
        Notification::route('mail', $lead->email)
            ->notify(new PartnershipLeadThanks($lead));

        return back()->with('success', 'Thanks — we’ve received your details.');
    }
}
