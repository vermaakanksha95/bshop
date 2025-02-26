<?php

namespace App\Livewire\Admin\Coupon;

use App\Models\Coupon;
use Livewire\Component;
use Livewire\Attributes\Validate;

class CreateCoupon extends Component
{
    #[Validate('required|string|unique:coupons,code')]
    public $code = '';

    #[Validate('required|in:fixed,percent')]
    public $discount_type;

    #[Validate('nullable|numeric|min:0|required_with:discount_type')]
    public $discount_value;

    #[Validate('nullable|date|after:today')]
    public $expiration_date;

    public $coupons;

    public function mount()
    {
        $this->coupons = Coupon::latest()->get(); // Fetching latest coupons
    }

    public function store()
    {
        $this->validate();

        Coupon::create([
            'code' => $this->code,
            'discount_type' => $this->discount_type,
            'discount_value' => $this->discount_value,
            'expiration_date' => $this->expiration_date
        ]);

        $this->reset();
        $this->coupons = Coupon::latest()->get(); // Refresh list after new coupon

        session()->flash('message', 'Coupon Created Successfully.');
        $this->dispatch('coupon-created'); // Useful for Livewire event handling
    }

    public function render()
    {
        return view('livewire.admin.coupon.create-coupon');
    }
}
