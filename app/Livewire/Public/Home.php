<?php

namespace App\Livewire\Public;

use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;

class Home extends Component
{
    #[Layout('components.layouts.public')]
    public function render()
    {
        return view('livewire.public.home');
    }
}
