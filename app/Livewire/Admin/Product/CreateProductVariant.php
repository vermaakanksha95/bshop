<?php

namespace App\Livewire\Admin\Product;

use App\Models\Product;
use App\Models\ProductVariant;
use Livewire\Component;

class CreateProductVariant extends Component
{
    

   

    public function render()
    {
        return view('livewire.admin.product.create-product-variant');
    }
}
