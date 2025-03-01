<?php

namespace App\Livewire\Public;
use Livewire\Attributes\Layout;

use Livewire\Component;

class Contact extends Component
{
    #[Layout('components.layouts.public')]
    public function render()
    {
        return view('livewire.public.contact');
    }
}
