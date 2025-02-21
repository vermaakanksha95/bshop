<?php

namespace App\Livewire\Admin\Product;

use App\Models\Product;
use Livewire\Component;

class ImageForm extends Component
{
    public $product;
    public $image;
    public $isEditing = false;

    public function mount( Product $product)
    {
        $this->product = $product;
        $this->image = $product->image;
    }
    public function edit()
    {
        $this->isEditing = true;
    }
    public function cancel()
    {
        $this->isEditing = false;
        $this->image = $this->product->image;
    }
    public function update()
    {
        $this->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $this->product->update([
            'image' => $this->image->store('products', 'public'),
        ]);

        $this->isEditing = false;
        session()->flash('message', 'Product image updated successfully!');
    }
    public function render()
    {
        return view('livewire.admin.product.image-form');
    }
}
