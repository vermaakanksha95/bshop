<?php

namespace App\Livewire\Public\Component;

use Livewire\Attributes\Layout;

use Livewire\Component;

class Singleview extends Component
{
    #[Layout('components.layouts.public')]
    public function render()
    {
        return view('livewire.public.component.singleview');
    }
}
