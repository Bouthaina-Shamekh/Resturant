<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class OrderDeliveryEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;


    public $admin_id;
    public $order;
    public $delivery;
    public $source;

    /**
     * Create a new event instance.
     */
    public function __construct($admin_id ,$order, $delivery, $source = 'delivery')
    {
        $this->admin_id = $admin_id;
        $this->order = $order;
        $this->delivery = $delivery;
        $this->source = $source;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        return [
            'delivery',
        ];
    }

    public function broadcastAs()
    {
        return 'notify';

    }

    public function broadcastWith()
    {
        return [
            'admin_id' => $this->admin_id,
            'order' => $this->order,
            'delivery' => $this->delivery,
            'source' => $this->source,
        ];
    }

}
