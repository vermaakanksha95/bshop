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

    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'slug' => ['required', 'string', 'max:255'],
        ];
    }
    
    

    public function updatedName($value)
    {
        $this->slug = Str::slug($value);
    }

    public function store()
    {
        // Validate inputs based on the rules set in the class
        $validatedData = $this->validate();

        // Debug the validated data to see what's being passed

        if ($this->photo) {
            $imageName = "C" . time() . '.' . $this->photo->getClientOriginalExtension();
            $this->photo->storeAs('public/image/product', $imageName);
        } else {
            $imageName = null;
        }

        // Insert the category into the database
        $product = Product::create([
            'name' => $this->name,
            'description' => $this->description,
            'slug' => $this->slug,
            'price' => $this->price,
            'discount_price' => $this->discount_price,
            'quantity' => $this->quantity,
            'sku' => $this->sku,
            'category_id' => $this->category_id,
            'brand' => $this->brand,
            'image' => $imageName,
            'status' => 0
        ]);

        // Redirect with success or error message
        if ($product) {
            session()->flash('success', 'Product added successfully.');
            return redirect()->route('product.viewproduct', $product->slug);
        } else {
            session()->flash('error', 'Unable to add product.');
            return redirect()->back();
        }
    }

    public function mount()
    {
        $this->categories = Category::get();
    }
    public function render()
    {
        $categories = Category::get();
        return view('livewire.admin.product.create-product')->with('categories', $categories);
    }
}
