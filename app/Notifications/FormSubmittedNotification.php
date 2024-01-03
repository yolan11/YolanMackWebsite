<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class FormSubmittedNotification extends Notification
{
    use Queueable;

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Nouveau formulaire soumis')
            ->line('Un nouveau formulaire a été soumis.')
            ->line('Veuillez vérifier votre interface d\'administration pour plus de détails.'); // Message générique
    }

    public function toArray($notifiable)
    {
        return [
            // Si vous avez besoin de fournir des données dans d'autres formats
        ];
    }
}
