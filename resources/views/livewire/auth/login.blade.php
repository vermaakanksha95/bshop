<div class="flex items-center justify-center min-h-screen mt-20 bg-gray-100">
    <div class="bg-white shadow-lg rounded-lg flex max-w-4xl w-full overflow-hidden">
        <!-- Left Side: Illustration -->
        <div class="w-1/2 bg-blue-50 flex items-center justify-center p-8">
          <img src="login.gif" alt="Registration Animation">
        </div>
        
        <!-- Right Side: Form -->
        <div class="w-1/2 p-8">
            <h2 class="text-2xl font-semibold mb-6">Log in and step into a world of style and savings!</h2>
            
            <form wire:submit.prevent="save">
                
                <div class="mb-4">
                    <label class=""> Email</label>
                    <input type="email" wire:model="email" placeholder="Email" class="w-full p-2 border rounded">
                </div>
                <div class="mb-4">
                    <label class=""> Password</label>
                    <input type="password" wire:model="password" placeholder="Password" class="w-full p-2 border rounded">
                </div>

                <div class="flex items-center justify-between mb-4">
                     <label class="flex items-center">
                        <input type="checkbox" class="mr-2"> Remember Password
                     </label>  
                    <a href="/register" class="text-blue-500 text-sm">Create an Account</a>
                </div>
                <div class="flex space-x-4">
                    <button type="submit" class="bg-[#7db0ad] text-white px-6 py-2 rounded">Login</button>
                    
                </div>
            </form>
        </div>
    </div>
</div>