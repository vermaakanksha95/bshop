<?php

namespace App\Livewire\Auth;
use Illuminate\Support\Facades\Auth;

use Livewire\Component;

class Logout extends Component
{
      public function logout(){
        Auth::logout();
        return redirect(route('login'));
      }
    public function render()
    {
        return view('livewire.auth.logout');
    }
}
