<?php
namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;

class Login extends Component
{
    #[Layout('components.layouts.public')]

    #[Validate('required|email')]
    public $email = '';

    #[Validate('required|min:8')]
    public $password = '';

    public function save()
    {
        // Validate user input
        $validated = $this->validate();

        // Attempt authentication
        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            // Regenerate session
            session()->regenerate();

            // Redirect based on user role
            if (Auth::user()->role === 'admin') {
                return redirect('admin');  // Redirect admin to /admin
            } else {
                return redirect('/');   // Redirect normal users to /home
            }
        }

        // If authentication fails
        session()->flash('error', 'Invalid credentials. Please try again.');
    }
    

    public function render()
    {
        return view('livewire.auth.login');
    }
}
