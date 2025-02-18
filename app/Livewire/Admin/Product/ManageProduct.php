<?php

namespace App\Livewire\Admin\Product;

use App\Models\Product;
use Livewire\Component;

class ManageProduct extends Component
{
    public $products;
    public function mount()
    {
        $this->products = Product::get();
    }
    public function render()
    {
        $products = Product::all();
        return view('livewire.admin.product.manage-product' ,['products' => $products,]);
    }
}
