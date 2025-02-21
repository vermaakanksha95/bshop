<?php

namespace App\Livewire\Admin\Product;

use App\Models\Product;
use Livewire\Component;

class DiscountPriceForm extends Component
{
    public $product;
    public $discountPrice;
    public $isEditing = false;
    
     public function mount (Product $product){
        $this->product = $product;
        $this->discountPrice = $product->discount_price;
     }

     public function edit(){
         $this->isEditing = true;
     }
     public function cancel(){
         $this->isEditing = false;
         $this->discountPrice = $this->product->discount_price;
     }
     public function update(){
         $this->validate([
             'discountPrice' => 'required|numeric',
         ]);
         $this->product->update([
             'discount_price' => $this->discountPrice,
         ]);
         $this->isEditing = false;
         session()->flash('message','Product discount price updated successfully');
     }

    public function render()
    {
        return view('livewire.admin.product.discount-price-form');
    }
}
