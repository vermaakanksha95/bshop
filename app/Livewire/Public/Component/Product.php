<?php

namespace App\Livewire\Public\Component;

use App\Models\Product as ModelsProduct;
use Livewire\Component;

class Product extends Component
{
public function render()
    {
        $products = ModelsProduct::all();
        return view('livewire.public.component.product',['products'=>$products]);
    }
}
