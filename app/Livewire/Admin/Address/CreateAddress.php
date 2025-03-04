<?php

namespace App\Livewire\Admin\Address;

use Livewire\Component;
use App\Models\Address;
use App\Models\User;
use Illuminate\Validation\Rule;

class CreateAddress extends Component
{
    // Form fields
  
    public $user_id;
    public $name;
    public $phone;
    public $alt_phone;
    public $address_type;
    public $landmark;
    public $street;
    public $area;
    public $address_line;
    public $city;
    public $state;
    public $postal_code;
    public $status = true;

    // Validation rules
    protected $rules = [
        'user_id' => 'required|exists:users,id',
        'name' => 'required|string|max:255',
        'phone' => 'required|string|min:10',
        'alt_phone' => 'nullable|string|min:10',
        'address_type' => 'nullable|string|max:255',
        'landmark' => 'nullable|string|max:255',
        'street' => 'nullable|string|max:255',
        'area' => 'nullable|string|max:255',
        'address_line' => 'nullable|string|max:255',
        'city' => 'required|string|max:255',
        'state' => 'required|string|max:255',
        'postal_code' => 'required|string|min:6',
        'status' => 'boolean',
    ];
    public function mount(){
        $this->user_id = User::first()->id;
        // dd($this->user_id);
    }


    
    // Save address
    public function saveAddress()
    {
        
        $this->validate();

        Address::create([
            'user_id' => $this->user_id,
            'name' => $this->name,
            'phone' => $this->phone,
            'alt_phone' => $this->alt_phone,
            'address_type' => $this->address_type,
            'landmark' => $this->landmark,
            'street' => $this->street,
            'area' => $this->area,
            'address_line' => $this->address_line,
            'city' => $this->city,
            'state' => $this->state,
            'postal_code' => $this->postal_code,
            'status' => $this->status,
        ]);

        // Clear the form
        $this->reset();

        // Show success message
        session()->flash('message', 'Address created successfully.');
    }

    public function render()
    {
        return view('livewire.admin.address.create-address',);
    }
}
