<?php

namespace App\Livewire\Admin\Product;
use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class CategoryForm extends Component
{
    public $product;
    public $categories = [];
    public $category_id;
    public $isEditing = false;

    public function mount( Product $product)
    {
        $this->product = $product;
        $this->categories = Category ::all();
        $this ->category_id = $product->category_id?? null;
    }
    public function edit()
    {
        $this->isEditing = true;
    }
    public function cancel()
    {
        $this->isEditing = false;
        $this->category_id = $this->product->category_id;
    }
    public function update()
    {
        $this->validate([
            'category_id' => 'nullable|exists:categories,id',
        ]);

        $this->product->update([
            'category_id' => $this->category_id,
        ]);

        $this->isEditing = false;
        session()->flash('message', 'Product category updated successfully!');
    }
    
    public function render()
    {
        return view('livewire.admin.product.category-form', [
            'categories' => $this->categories,
        ]);
    }
}
