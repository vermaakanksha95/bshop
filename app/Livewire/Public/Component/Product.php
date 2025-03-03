<?php

namespace App\Livewire\Public\Component;

use App\Models\Product as ModelsProduct;
use App\Models\Wishlist;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Product extends Component
{
    public $products; // Define a public property to store products
    public $wishlist = []; // Array to store wishlisted product IDs
    public $message = ''; // Property to store the message

    public function mount()
    {
        // Fetch all products
        $this->products = ModelsProduct::all();

        // Fetch the user's wishlist items if logged in
        if (Auth::check()) {
            $this->wishlist = Wishlist::where('user_id', Auth::id())
                ->pluck('product_id')
                ->toArray();
        }
    }

    public function toggleWishlist($productId)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        if (in_array($productId, $this->wishlist)) {
            Wishlist::where('user_id', Auth::id())->where('product_id', $productId)->delete();
            $this->wishlist = array_diff($this->wishlist, [$productId]);
            $this->message = 'Product removed from wishlist';
            dd($this->message);
        } else {
            Wishlist::create([
                'user_id' => Auth::id(),
                'product_id' => $productId,
            ]);
            $this->wishlist[] = $productId;
            $this->message = 'Product added to wishlist';
            dd($this->message);
            
        }

        // Force Livewire to detect changes
        $this->dispatch('clear-message');
        $this->dispatch('$refresh');
    }

    public function clearMessage()
    {
        $this->message = ''; // Clear the message
    }

    public function render()
    {
        return view('livewire.public.component.product', [
            'products' => $this->products,
        ]);
    }
}