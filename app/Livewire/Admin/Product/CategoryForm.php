<?php

namespace App\Livewire\Admin\Product;

use App\Models\Product;
use Livewire\Component;

class CategoryForm extends Component
{
    public $product;
    public $category;
    public $isEditing = false;

    public function mount( Product $product)
    {
        $this->product = $product;
        $this->category = $product->category;
    }
    public function edit()
    {
        $this->isEditing = true;
    }
    public function cancel()
    {
        $this->isEditing = false;
        $this->category = $this->product->category;
    }
    public function update()
    {
        $this->validate([
            'category' => 'required|string|max:255',
        ]);

        $this->product->update([
            'category' => $this->category,
        ]);

        $this->isEditing = false;
        session()->flash('message', 'Product category updated successfully!');
    }
    
    public function render()
    {
        return view('livewire.admin.product.category-form');
    }
}
