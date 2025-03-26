<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class MessageEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $chatData;

    public function __construct($chatData)
    {
        $this->chatData = $chatData;
    }


    public function broadcastWith()
    {
        \Log::info('Broadcasting MessageEvent:', ['chat' => $this->chatData]);

        return [
            'chat' => $this->chatData,
            'socket' => null, // اجعلها null لتجنب تصفية الحدث
        ];
    }

    public function broadcastOn()
    {
        return new PrivateChannel('private-status-liked'); // Prefix with 'private-'
    }

    public function broadcastAs()
    {
        return 'noyify';
    }

}
