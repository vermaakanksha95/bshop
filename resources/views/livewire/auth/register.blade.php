<div>
    <div class="flex items-center justify-center min-h-screen ">
        <div class="bg-white rounded-lg shadow-lg flex w-2/3">
            <!-- Left Section -->
            <div class="w-1/2 bg-cover bg-center p-10 " style="background-image: url('/images/background.jpg');">
                <h2 class="text-2xl font-bold ">Welcome Back</h2>
                <p>Please log in using your personal information to stay connected with us.</p>
            </div>

            <!-- Right Section -->
            <div class="w-1/2 p-10">
                <h2 class="text-xl font-bold text-center">Register</h2>

                @if (session()->has('error'))
                <div class="text-red-500">{{ session('error') }}</div>
                @endif

                <form wire:submit.prevent="login" class="space-y-4">
                    <input type="name" wire:model="name" placeholder="Name"
                        class="w-full p-2 border rounded">
                    @error('name') <span class="text-red-500">{{ $message }}</span> @enderror

                    <input type="email" wire:model="email" placeholder="Email"
                        class="w-full p-2 border rounded">
                    @error('email') <span class="text-red-500">{{ $message }}</span> @enderror

                    <input type="password" wire:model="password" placeholder="Password"
                        class="w-full p-2 border rounded">
                    @error('password') <span class="text-red-500">{{ $message }}</span> @enderror

                    <a href="#" class="text-blue-500">Forgot password?</a>

                    <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded">Log In</button>
                </form>

                <p class="text-center mt-4">Don’t have an account? <a href="#" class="text-blue-500">Signup</a></p>
            </div>
               
        </div>
    </div>
</div>