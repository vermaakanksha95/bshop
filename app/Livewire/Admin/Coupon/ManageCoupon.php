<?php

namespace App\Livewire\Admin\Coupon;

use App\Models\Coupon;
use Livewire\Component;

class ManageCoupon extends Component
{
    protected $listeners = ['coupon-created' => '$refresh']; // Refresh component when a coupon is created

    public function render()
    {
        return view('livewire.admin.coupon.manage-coupon', [
            'coupons' => Coupon::latest()->get(), // Fetch latest coupons
        ]);
    }
}
