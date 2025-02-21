<?php

namespace App\Livewire\Admin\Product;

use App\Models\Product;
use Livewire\Component;

class QuantityForm extends Component
{
    public $product;
    public $quantity;
    public $isEditing = false;

    public function mount( Product $product)
    {
        $this->product = $product;
        $this->quantity = $product->quantity;
    }
    public function edit()
    {
        $this->isEditing = true;
    }
    public function cancel()
    {
        $this->isEditing = false;
        $this->quantity = $this->product->quantity;
    }
    public function update()
    {
        $this->validate([
            'quantity' => 'required|numeric',
        ]);

        $this->product->update([
            'quantity' => $this->quantity,
        ]);

        $this->isEditing = false;
        session()->flash('message', 'Product quantity updated successfully!');
    }
    public function render()
    {
        return view('livewire.admin.product.quantity-form');
    }
}
