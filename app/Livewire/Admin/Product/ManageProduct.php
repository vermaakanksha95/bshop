<?php

namespace App\Livewire\Admin\Product;

use App\Models\Product;
use Livewire\Component;

class ManageProduct extends Component
{
    public $searchTerm = '';

    public function render()
    {
        $products = Product::where('name', 'like', '%' . $this->searchTerm . '%')
            ->orWhere('description', 'like', '%' . $this->searchTerm . '%')
            ->get();

        
        return view('livewire.admin.product.manage-product', compact('products'));
        dd($products);
    }
    public function delete($id)
    {
        $product = Product::find($id);
        $product->delete();
        session()->flash('message', 'Product deleted successfully.');
    }
}
