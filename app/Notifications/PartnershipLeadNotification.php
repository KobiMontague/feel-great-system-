<?php

namespace App\Notifications;

use App\Models\Lead;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class PartnershipLeadNotification extends Notification implements ShouldQueue
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
            ->subject('New Partnership Lead')
            ->greeting('New Partnership Lead')
            ->line('A new partnership inquiry has been submitted on your website.')
            ->line('Name: ' . $this->lead->name)
            ->line('Email: ' . $this->lead->email)
            ->line('Phone: ' . ($this->lead->phone ?? 'N/A'))
            ->action('Reply to ' . $this->lead->name, 'mailto:' . $this->lead->email);
    }
}
