<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class OrderDeliveryNotification extends Notification
{
    use Queueable;

    protected $order;
    protected $delivery;
    protected $source;


    /**
     * Create a new notification instance.
     */
    public function __construct($order,$delivery , $source = 'order')
    {
        $this->order = $order;
        $this->delivery = $delivery;
        $this->source = $source;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable)
    {
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toDatabase($notifiable)
    {
        return [
            'order' => $this->order,
            'delivery' => $this->delivery,
            'source' => $this->source
        ];
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    // public function toArray(object $notifiable): array
    // {
    //     return [
    //         //
    //     ];
    // }
}
