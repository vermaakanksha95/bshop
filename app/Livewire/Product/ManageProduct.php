<?php

namespace App\Livewire\Product;
use App\Models\Product;
use Livewire\Component;

class ManageProduct extends Component
{
    public $products;
    public function render()
    {
        $products = Product::all();
        return view('livewire.product.manage-product', ['products' => $products,]);
    }

    public function mount(){
        $this->products = Product::get();
    }
}
