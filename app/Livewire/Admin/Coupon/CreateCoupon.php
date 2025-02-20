<?php

namespace App\Livewire\Admin\Coupon;

use App\Models\Coupon;
use Livewire\Component;

class CreateCoupon extends Component
{
    public $code, $discount_type, $discount_value, $expiration_date;
    public $coupons;

    public function mount()
    {
        $this->coupons = Coupon::all();
    }

    public function render()
    {
        return view('livewire.admin.coupon.create-coupon');
    }
    public function store()
    {
        $this->validate([
            'code' => 'required|string|unique:coupons,code|max:50',
            'discount_type' => 'required|in:percentage,fixed',
            'discount_value' => 'nullable|numeric|min:0',
            'expiration_date' => 'nullable|date|after:today',
        ]);

        $coupon = new Coupon();
        $coupon->code = $this->code;
        $coupon->discount_type = $this->discount_type;
        $coupon->expiration_date = $this->expiration_date;
        $coupon->store();
        session()->flash('message','Coupon Created Successfully');
    }
}
