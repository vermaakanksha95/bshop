<nav class="bg-[#2e716b] text-white p-4 shadow-md ">
    <div class="container mx-auto flex justify-between items-center">
        <!-- Logo -->
        <a href="/admin" class="text-xl font-bold">BiharShop Admin</a>

        <!-- Navigation Links -->
        <div class="hidden md:flex space-x-6">
            <a href="/admin" class="hover:text-gray-400">Dashboard</a>
            <a href="/admin/orders" class="hover:text-gray-400">Orders</a>
            <a href="/admin/manage-product" class="hover:text-gray-400">Products</a>

        </div>

        <!-- User Profile / Dropdown or Login Button -->
        <div class="relative">
            <script>
                var isAdminLoggedIn = true; // Change this dynamically based on authentication
                if (isAdminLoggedIn) {
                    document.write(`
                        <button class="flex items-center space-x-2 focus:outline-none" onclick="document.getElementById('dropdown-menu').classList.toggle('hidden')">
                            <span>Admin Name</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div id="dropdown-menu" class="hidden absolute right-0 mt-2 w-48 bg-white text-black shadow-lg rounded-md">
                            <a href="/admin/profile" class="block px-4 py-2 hover:bg-gray-200">Profile</a>
                            <a href="/admin/settings" class="block px-4 py-2 hover:bg-gray-200">Settings</a>
                            <a href="/logout" class="block px-4 py-2 text-red-600 hover:bg-gray-200">Logout</a>
                        </div>
                    `);
                } else {
                    document.write(`
                        <a href="/login" class="bg-green-600 px-3 py-1 rounded hover:bg-green-700">Login</a>
                        <a href="/register" class="bg-blue-600 px-3 py-1 rounded hover:bg-blue-700">Register</a>
                    `);
                }
            </script>
        </div>
    </div>
</nav>