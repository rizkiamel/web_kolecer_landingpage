<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Carbon\Carbon;
//use Notification;

class OffersNotification extends Notification
{
    use Queueable;
    private $dataLuar;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($dataLuar)
    {
        $this->dataLuar = $dataLuar;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        //return ['mail', 'database'];
        return ['database'];
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
                    ->greeting($this->offerData['greeting'])
                    ->line($this->offerData['body'])
                    ->action($this->offerData['offerText'], $this->offerData['offerUrl'])
                    ->line($this->offerData['thanks']);
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toDatabase($notifiable)
    {
        return [
            'user' => auth()->user()->name,
            'repliedTime' => Carbon::now()->isoFormat('D MMMM Y'),
            'pesan' => $this->dataLuar['pesan'],
        ];
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
            'name' => $this->user->name,
            'email' => $this->user->email,
        ];
    }
}
