<?php
namespace App\Events;

use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Broadcasting\Channel;

class ChatMessageSent implements ShouldBroadcast
{
    public $senderId;
    public $senderType;
    public $receiverId;
    public $receiverType;
    public $message;

    public function __construct($senderId, $senderType, $receiverId, $receiverType, $message)
    {
        $this->senderId = $senderId;
        $this->senderType = $senderType;
        $this->receiverId = $receiverId;
        $this->receiverType = $receiverType;
        $this->message = $message;
    }

    public function broadcastOn()
    {
        return new Channel('chat');  
    }

    public function broadcastAs()
    {
        return 'chat.message.sent'; // Custom event name
    }

    public function broadcastWith()
    {       

        return [
            'senderId' => $this->senderId,
            'senderType' => $this->senderType,
            'receiverId' => $this->receiverId,
            'receiverType' => $this->receiverType,
            'message' => $this->message,
        ];
    }
}