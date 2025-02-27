<nav class="bg-[#2e716b] text-white p-4 shadow-md">
    <div class="container mx-auto flex justify-between items-center">
        <!-- Logo -->
        <a href="/" class="text-xl font-bold">BiharShop</a>

        <!-- Navigation Links -->
        <div class="hidden md:flex space-x-6">
            <a href="/admin" class="hover:text-gray-400">Dashboard</a>
            <a href="/admin/orders" class="hover:text-gray-400">Orders</a>
            <a href="/admin/manage-product" class="hover:text-gray-400">Products</a>
        </div>

        <!-- User Profile / Dropdown -->
        <div class="relative">
            @auth
                <button class="flex items-center space-x-2 focus:outline-none" onclick="document.getElementById('dropdown-menu').classList.toggle('hidden')">
                    <span>{{ auth()->user()->name }}</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div id="dropdown-menu" class="hidden absolute right-0 mt-2 w-48 bg-white text-black shadow-lg rounded-md">
                    <a href="/admin/profile" class="block px-4 py-2 hover:bg-gray-200">{{ auth()->user()->email }}</a>
                    <a href="/admin/settings" class="block px-4 py-2 hover:bg-gray-200">Settings</a>
                    <livewire:auth.logout/>

                    
                      
                </div>
            @else
                <a href="/login" class="bg-[#7db0ad] px-3 py-2 rounded hover:bg-[#7db0ad]">Login</a>
                <a href="/register" class="bg-blue-400 px-3 py-2 rounded hover:bg-blue-500">Register</a>
            @endauth
        </div>
    </div>
</nav>
