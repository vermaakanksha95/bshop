<?php

namespace App\Livewire\Public;

use App\Models\Category;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Home extends Component
{
    #[Layout('components.layouts.public')]
    public function render()
    {
        $categories = Category::all();

        return view('livewire.public.home', [
            'categories' => $categories,

        ]);
    }
}
