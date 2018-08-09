<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class Registereduser extends Notification implements ShouldQueue
{
    use Queueable;

    protected $activation;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($activation)
    {
        $this->activation = $activation;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject(config('app.name') . ' Account Confirmation')
            ->greeting('Hi ' . ucfirst($notifiable->name) . ',')
            ->line('Thanks for creating a  account. To continue, please confirm your email address by clicking the button below')
            ->action('Activate', route('user.activate', ['token' => $this->activation->token]));
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
