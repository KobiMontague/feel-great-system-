<?php

namespace App\Notifications;

use App\Models\Lead;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class PartnershipLeadThanks extends Notification implements ShouldQueue
{
    use Queueable;

    public function __construct(public Lead $lead) {}

    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('Thanks — We Received Your Details')
            ->greeting('Thanks, ' . $this->lead->name . '!')
            ->line('We’ve received your partnership inquiry. I’ll be in touch shortly with next steps and the 10-minute overview video.')
            ->action('Email me now', 'mailto:' . config('mail.from.address'));
    }
}
