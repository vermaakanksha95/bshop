<?php

namespace App\Livewire\Admin\Product;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithFileUploads;

class ImageForm extends Component
{
    use WithFileUploads;
    public $product;
    public $photo;
    public $isEditing = false;

    public function mount( Product $product)
    {
        $this->product = $product;
        $this->photo = $product->photo;
    }
    public function edit()
    {
        $this->isEditing = true;
    }
    public function cancel()
    {
        $this->isEditing = false;
        $this->photo = $this->product->photo;
    }
    public function update()
    {
        $this->validate([
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($this->photo) {
            $imageName = time().'.'.$this->photo->extension();  
            $this->photo->storeAs( $imageName, 'public');
        } else {
            $imageName = $this->product->image; 
        }

        $this->product->update([
            'image' => $imageName,
        ]);

        $this->isEditing = false;
        session()->flash('message', 'Product image updated successfully!');
    }
    public function render()
    {
        return view('livewire.admin.product.image-form');
    }
}
