<?php

namespace App\Livewire\Admin\Product;

use App\Models\Product;
use App\Models\ProductVariant;
use Livewire\Component;

class CreateProductVariant extends Component
{
    public $product;
    public $variants = [];
    public $showUpdateButton = false;

    protected $rules = [
        'variants.*.type' => 'required|string',
        'variants.*.value' => 'required|string',
        'variants.*.price' => 'required|numeric',
        'variants.*.stock' => 'required|integer',
    ];

    public function mount(Product $product)
    {
        $this->product = $product;
        $this->variants = ProductVariant::where('product_id', $this->product->id)->get()->map(function ($variant) {
            return [
                'id' => $variant->id,
                'type' => $variant->type,
                'value' => $variant->value,
                'price' => $variant->price,
                'stock' => $variant->stock,
            ];
        })->toArray();
    }

    public function addVariant()
    {
        $this->variants[] = ['type' => '', 'value' => '', 'price' => $this->product->discount_price, 'stock' => ''];
        $this->showUpdateButton = true;
    }
    public function removeVariant($index)
    {
        if (isset($this->variants[$index]['id'])) {
            ProductVariant::find($this->variants[$index]['id'])->delete();
        }
        unset($this->variants[$index]);
        $this->variants = array_values($this->variants);
    }

    public function update()
    {
        $this->validate();
        foreach ($this->variants as $variant) {
            if (isset($variant['id'])) {
                ProductVariant::find($variant['id'])->update([
                    'variant_type' => $variant['type'],
                    'variant_value' => $variant['value'],
                    'price' => $variant['price'],
                    'stock' => $variant['stock'],
                ]);
            } else {
                ProductVariant::create([
                    'product_id' => $this->product->id,
                    'variant_type' => $variant['type'],
                    'variant_value' => $variant['value'],
                    'price' => $variant['price'],
                    'stock' => $variant['stock'],
                ]);
            }
        }
        $this->showUpdateButton = false;
        session()->flash('message', 'Product Variants Updated Successfully');
    }


    public function render()
    {
        return view('livewire.admin.product.create-product-variant');
    }
}
