<?php

namespace App\Livewire\Admin\Product;

use App\Models\Product;
use Livewire\Component;

class ViewProduct extends Component
{
    public $product;
    public function mount(Product $product){
        $this->product = $product;
    }
    public function render()
    {
        return view('livewire.admin.product.view-product');
    }
}
