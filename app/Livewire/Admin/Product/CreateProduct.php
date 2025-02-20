<?php

namespace App\Livewire\Admin\Product;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Str;


class CreateProduct extends Component
{
    public $name, $slug, $description, $price, $discount_price, $quantity, $image, $sku, $category_id, $brand;
    public $categories;

    public function mount()
    {
        $this->categories = Category::all();
    }

    public function updatedName()
    {
        $this->slug = Str::slug($this->name);
    }

    public function save()
    {
        $this->validate([
            'name'            => 'required|string|max:255',
            'slug'            => 'required|string|unique:products,slug',
            'description'     => 'required|string',
            'price'           => 'required|numeric|min:0',
            'discount_price'  => 'nullable|numeric|min:0|lt:price',
            'quantity'        => 'required|integer|min:1',
            'image'           => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'sku'             => 'nullable|string|max:100|unique:products,sku',
            'category_id'     => 'required|exists:categories,id',
            'brand'           => 'nullable|string|max:255',

        ]);

        // // Image Upload Handling
        // $imagePath = null;
        // if ($this->image) {
        //     $imagePath = $this->image->store('products', 'public');
        // }
        $product = new Product();
        $product->name  = $this->name;
        $product->slug  = $this->slug;
        $product->description = $this->description;
        $product->price   = $this->price;
        $product->discount_price = $this->discount_price;
        $product->quantity = $this->quantity;
        //$product->image  = $imagePath;
        $product->sku  = $this->sku;
        $product->category_id = $this->category_id;
        $product->brand = $this->brand;

        $product->save();

        session()->flash('message', 'Product created successfully.');
        return redirect()->route('product.manage-product');
    }
    public function render()
    {
        return view('livewire.admin.product.create-product');
    }
}
