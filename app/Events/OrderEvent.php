<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class OrderEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;


    public $admin_id;
    // public $data;
    public $order;
    public $source;

    /**
     * Create a new event instance.
     */
    public function __construct($admin_id , $data, $order, $source = 'order')
    {
        $this->admin_id = $admin_id;
        // $this->data = $data;
        $this->order = $order;
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
            'order',
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
            // 'data' => $this->data,
            'order' => $this->order,
            'source' => $this->source,
        ];
    }

}
