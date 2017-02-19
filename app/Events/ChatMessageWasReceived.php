<?php namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

//use InteractsWithSockets, SerializesModels;




class ChatMessageWasReceived implements ShouldBroadcast
{

   use InteractsWithSockets, SerializesModels;
    // *
    //  * Create a new event instance.
    //  *
    //  * @return void
     
    // public function __construct()
    // {
    //     //
    // }

    public $chatMessage;


    public $user;


    public function __construct($chatMessage, $user)
    {
        $this->chatMessage = $chatMessage;
        $this->user = $user;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return [
            "chat-room.1"
        ];
       // return new Channel('chat-room.1');

        //return new PrivateChannel('channel-name');
    }
}
