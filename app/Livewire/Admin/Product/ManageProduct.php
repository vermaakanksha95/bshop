<?php

namespace App\Livewire\Admin\Product;

use App\Models\Product;
use Livewire\Component;

class ManageProduct extends Component
{
    public $products;
    public function mount()
    {
        $this->products = Product::get();
    }
    public function delete(Product $product){

        if ($product->category()->exists()) {
            return redirect('/admin/manage-product')->with('error', 'This product has parentcategories,Please delete them first.');
        }
        $product->delete();
        return redirect('/admin/manage-product')->with('success', 'Product deleted successfully.');
        

    }
    public function render()
    {
        $products = Product::all();
        return view('livewire.admin.product.manage-product' ,['products' => $products,]);
    }
}
