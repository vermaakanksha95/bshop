<?php

namespace App\Livewire\Public\Component;

use App\Models\Product as ModelsProduct;
use Livewire\Component;

class Product extends Component
{
    public $products; // Define a public property to store products

    public function mount()
    {
        $this->products = ModelsProduct::all(); // Fetch all products
    }

    public function render()
    {
        return view('livewire.public.component.product', [
            'products' => $this->products, // Pass products to the Blade view
        ]);
    }
}

