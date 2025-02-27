<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;

class Register extends Component
{
    #[Layout('components.layouts.public')]

    #[Validate('required|string|min:3')]
    public $name;

    #[Validate('required|email|unique:users,email')]
    public $email;

    #[Validate('required|string|min:8')]
    public $password;

    #[Validate('required|string|digits:10')]
    public $contact;

    public function save()
    {
        $this->validate();

        // Create the user
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'contact' => $this->contact,
        ]);

        // Reset fields
        $this->reset();

        // Redirect to login page
        return redirect()->route('login')->with('message', 'Registration successful! Please log in.');
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
