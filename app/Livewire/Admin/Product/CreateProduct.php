<?php

namespace App\Livewire\Admin\Product;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\WithFileUploads;


class CreateProduct extends Component
{
    public $slug, $description, $price, $discount_price, $quantity, $image, $sku, $category_id, $brand, $photo;
    public $categories = [];
    use WithFileUploads;


    #[Validate('required')]
    public $name = '';

    public function updatedName()
    {
        $this->slug = Str::slug($this->name);
    }

    public function store()
    {
        $this->validate();
        $product = Product::create([
            'name' => $this->name,
            'slug' => $this->slug,
            'description' => $this->description,
            'price' => $this->price,
            'discount_price' => $this->discount_price,
            'quantity' => $this->quantity,
            //'image'=>$this->image->store('products'),
            'sku' => $this->sku,
            'category_id' => $this->category_id,
            'brand' => $this->brand,
        ]);
        if ($product) {
            session()->flash('success', 'Product Inserted Successfully');

            return redirect()->route('viewproduct', $product);
        } else {
            session()->flash('error', 'Product Inserted Failed');
            return redirect()->back();
        }
    }

    public function mount()
    {
        $this->categories = Category::get();
    }
    public function render()
    {
        return view('livewire.admin.product.create-product');
    }
}
