<?php

namespace App\Livewire\Public\Component;

use App\Models\Product;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Singleview extends Component
{
    #[Layout('components.layouts.public')]

    public $product; // Store product data
    public $reviews = []; // Store reviews data

    public function mount($slug) // Capture the slug parameter
    {

        $this->product = Product::where('slug', $slug)->firstOrFail(); // Fetch product
    }

    public function render()
    {
        return view('livewire.public.component.singleview', [
            'product' => $this->product, // Pass product to Blade

        ]);
    }
}
