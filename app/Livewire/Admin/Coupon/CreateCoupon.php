<?php

namespace App\Livewire\Admin\Coupon;

use App\Models\Coupon;
use Livewire\Component;
use Livewire\Attributes\Validate;

class CreateCoupon extends Component
{
    #[Validate('required|string|max:255|unique:coupons,code')]
    public $code = '';
    #[Validate('required|in:percentage,fixed')]
    public $discount_type = '';

    #[Validate('required|numeric|min:0')]
    public $discount_value;

    #[Validate('nullable|date|after_or_equal:today')]
    public $expiration_date;

    #[Validate('nullable|boolean')]
    public $status = true;


    public $coupons = []; 

    public function save()
    {
        $this->validate();

        // Debugging: Show values before inserting
        // dd([
        //     'code' => $this->code,
        //     'discount_type' => $this->discount_type,
        //      'discount_value' => $this->discount_value,
        //      'expiration_date' => $this->expiration_date
        //  ]);

        Coupon::create([
            'code' => $this->code,
            'discount_type' => $this->discount_type,
            'discount_value' => $this->discount_value,
            'expiration_date' => $this->expiration_date
        ]);

        $this->reset();
        session()->flash('message', 'Coupon Created Successfully.');
        $this->dispatch('coupon-created');
        return redirect()->route('coupon.manage-coupon');
    }


    public function render()
    {
        $this->coupons = Coupon::latest()->get();
        return view('livewire.admin.coupon.create-coupon');
    }
}
