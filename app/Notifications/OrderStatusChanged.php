<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class OrderStatusChanged extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($order)
    {
        $this->order = $order;
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
            // ->subject(Lang::get('Din ordrestatus er ændret'))
            ->line('Vores konsulent har nu verificeret at alt dokumentation er i orden og underskrevet. Vi er derfor glade for at din ordre nu er aktiv. Order Id #' . $this->order->custom_order_id)
            ->line('Følg med i processen på danpanel.dk. Hvis du har spørgsmål kan vi altid træffes på mail, telefon eller i vores online chat, når du er logget ind på vores hjemmeside.')
            ->action('Gå til profil', url('/login'));
            // ->line('Thank you for using our application!');
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
