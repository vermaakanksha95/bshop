<div class="flex items-center justify-center min-h-screen mt-20 bg-gray-100">
    <div class="bg-white shadow-lg rounded-lg flex max-w-4xl w-full overflow-hidden">
        <!-- Left Side: Illustration -->
        <div class="w-1/2 bg-blue-50 flex items-center justify-center p-8">
          <img src="cloth.gif" alt="Registration Animation">
        </div>
        
        <!-- Right Side: Form -->
        <div class="w-1/2 p-8">
            <h2 class="text-2xl font-semibold mb-6">Be the first to grab the trendiest styles—Register now!</h2>
            
            <form wire:submit.prevent="save">
                <div class="mb-4">
                    <label class=""> Name</label>
                    <input type="text" wire:model="name" placeholder="Name" class="w-full p-2 border rounded">
                    @error('name')<span class="text-red-500 text-xs">{{ $message }}</span>@enderror
                </div>
                <div class="mb-4">
                    <label class=""> Email</label>
                    <input type="email" wire:model="email" placeholder="Email" class="w-full p-2 border rounded">
                     @error('email')<span class="text-red-500 text-xs">{{ $message }}</span>@enderror
                </div>
                <div class="mb-4">
                    <label class=""> Contact</label>
                    <input type="number" wire:model="contact" placeholder="Contact" class="w-full p-2 border rounded">
                     @error('contact')<span class="text-red-500 text-xs">{{ $message }}</span>@enderror
                </div>
                
                <div class="mb-4">
                    <label class=""> Password</label>
                    <input type="password" wire:model="password" placeholder="Password" class="w-full p-2 border rounded">
                     @error('password')<span class="text-red-500 text-xs">{{ $message }}</span>@enderror
                </div>

                <div class="flex items-center justify-between mb-4">
                     <label class="flex items-center">
                        <input type="checkbox" class="mr-2"> Remember Password
                    </label> 
                    <a href="/login" class="text-blue-500 text-sm">Login</a>
                </div>
                <div class="flex space-x-4">
                    <button type="submit" class="bg-[#7db0ad] text-white px-6 py-2 rounded">Register</button>
                    
                </div>
            </form>
        </div>
    </div>
</div>