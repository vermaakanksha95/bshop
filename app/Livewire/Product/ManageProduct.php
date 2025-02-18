<?php

namespace App\Livewire\Product;


use App\Models\Product;
use Livewire\Component;

class ManageProduct extends Component
{
    public function render()
    {
        $products = Product::all();
        return view('livewire.product.manage-product', ['products' => $products,]);
    }
}
