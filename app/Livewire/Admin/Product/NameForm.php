<?php

namespace App\Livewire\Admin\Product;

use App\Models\Product;
use Livewire\Component;

class NameForm extends Component
{
    public $product;
    public $name;
    public $isEditing = false;
    public function mount(Product $product)
    {
        $this->product = $product;
    }
    public function edit()
    {
        $this->name = $this->product->name;
        $this->isEditing = true;
    }
    public function cancel()
    {
        $this->isEditing = false;
    }
    public function update()
    {
        $this->validate([
            'name' => 'required|string',
        ]);
        $this->product->update([
            'name' => $this->name,
        ]);
        $this->isEditing = false;
        session()->flash('message', 'Product name updated successfully');
    }
    public function render()
    {
        return view('livewire.admin.product.name-form');
    }
}
