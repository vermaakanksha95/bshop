<nav class="bg-[#2e716b] shadow-md fixed w-full z-50">
   
    

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">
            <!-- Mobile Menu Button -->
            <button id="menu-toggle" class="md:hidden text-white text-2xl focus:outline-none">
                &#9776;
            </button>

            <!-- Logo -->
            <a href="#" class="text-2xl font-bold text-white">BiharShop</a>

            <!-- Navigation Links (Desktop) -->
            <ul id="menu" class="hidden md:flex space-x-6 text-white text-lg">
                <li><a href="#" class="hover:text-gray-200">Home</a></li>
                <li><a href="#" class="hover:text-gray-200">Shop</a></li>
                <li><a href="#" class="hover:text-gray-200">Categories</a></li>
                <li><a href="#" class="hover:text-gray-200">About Us</a></li>
                <li><a href="#" class="hover:text-gray-200">Contact</a></li>
            </ul>

            <!-- Search Bar -->
            <div class="hidden md:flex flex-1 justify-center">
                <input type="text" placeholder="Search products..."
                    class="px-4 py-2 w-64 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#2e716b]">
            </div>

            <!-- User Icons -->
            <div class="hidden md:flex items-center space-x-6 text-white">
                <a href="#" class="hover:text-gray-200">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                    </svg>
                </a>
                <a href="#" class="hover:text-gray-200">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                </a>
                <a href="#" class="hover:text-gray-200">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </a>
            </div>
        </div>

        <!-- Mobile Navigation Menu -->
        <ul id="mobile-menu"
            class="hidden flex-col bg-[#2e716b] w-full py-4 text-center text-white text-lg md:hidden">
            <li><a href="#" class="block py-2 hover:bg-[#3a8a82]">Home</a></li>
            <li><a href="#" class="block py-2 hover:bg-[#3a8a82]">Shop</a></li>
            <li><a href="#" class="block py-2 hover:bg-[#3a8a82]">Categories</a></li>
            <li><a href="#" class="block py-2 hover:bg-[#3a8a82]">About Us</a></li>
            <li><a href="#" class="block py-2 hover:bg-[#3a8a82]">Contact</a></li>
        </ul>
    </div>
</nav>

<!-- JavaScript for Mobile Menu -->
<script>
    document.getElementById('menu-toggle').addEventListener('click', function () {
        document.getElementById('mobile-menu').classList.toggle('hidden');
    });
</script>
