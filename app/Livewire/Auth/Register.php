<?php

namespace App\Livewire\Auth;

use Livewire\Component;

class Register extends Component
{
    public $users,$email,$password,$name;
    public function render()
    {
        return view('livewire.auth.register');
    }
}
