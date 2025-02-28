<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class ChatComponent extends Component
{

    public $receiver_id;
    public $sender_id;
    public $message = '';

    public function render()
    {
        return view('livewire.chat-component');
    }
}
