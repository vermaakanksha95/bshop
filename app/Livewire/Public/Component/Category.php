<?php

namespace App\Livewire\Public\Component;

use App\Models\Category as ModelsCategory;
use Livewire\Component;


class Category extends Component
{
    public $categories;

    public function mount()
    {
        $this->categories = ModelsCategory::all(); 
    }

    public function render()
    {
        return view('livewire.public.component.category', [
            'categories' => $this->categories
        ]);
    }
}
