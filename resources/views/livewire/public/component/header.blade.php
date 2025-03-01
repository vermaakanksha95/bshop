<div class="bg-white shadow-md fixed z-100 w-full top-0">
    <!-- Free Shipping Bar -->
    <div class="w-full py-3 bg-[#7db0ad]">
        <h1 class="text-center font-light text-white text-xl">FREE SHIPPING WORLDWIDE</h1>
    </div>

    <!-- Navigation Bar -->
    <div class="relative">
        <div class="flex items-center justify-between px-6 py-4">
            <!-- Mobile Menu Button -->
            <button id="menu-toggle" class="block md:hidden text-[#7db0ad] text-2xl">
                &#9776;
            </button>

            <!-- Navigation Links -->
            <ul id="menu" class="hidden md:flex space-x-6 text-[#7db0ad] uppercase tracking-widest text-lg">
                <li><a href="/">Shop</a></li>
                <li><a href="about">About</a></li>
                <li><a href="faq">FAQ</a></li>
                <li><a href="contact">Contact</a></li>
            </ul>

            <!-- Center Logo -->
            <div class="text-3xl font-bold text-[#7db0ad] tracking-wider">
                BIHARSHOP
            </div>

            <!-- Right: User Info / Login & Social Icons -->
            <div class="flex items-center space-x-4">
                @auth
                    <!-- If user is logged in -->
                    <div class="relative">
                        <button onclick="toggleDropdown()" class="flex items-center space-x-2 text-gray-800">
                            <span class="bg-gray-800 text-white w-6 h-6 flex items-center justify-center rounded-full">👤</span>
                            <span class="text-sm">{{ Auth::user()->name }}</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <!-- Dropdown Menu -->
                        <div id="dropdown-menu" class="hidden absolute right-0 mt-2 w-48 bg-white text-black shadow-lg rounded-md">
                            <a href="/profile" class="block px-4 py-2 hover:bg-gray-200">Profile</a>
                            <a href="/settings" class="block px-4 py-2 hover:bg-gray-200">Settings</a>
                            
                                <livewire:auth.logout/>
                            
                        </div>
                    </div>
                @else
                    <!-- If user is not logged in -->
                    <div class="hidden md:flex items-center space-x-2 text-gray-800">
                        <span class="bg-gray-800 text-white w-6 h-6 flex items-center justify-center rounded-full">👤</span>
                        <a href="{{ route('register') }}" class="text-sm">Register</a>
                        <a href="{{ route('login') }}" class="text-sm">Login</a>
                    </div>
                @endauth
            </div>
        </div>

        <!-- Mobile Navigation Menu -->
        <ul id="mobile-menu" class="hidden md:hidden flex flex-col bg-white w-full py-4 space-y-2 text-center shadow-md">
            <li><a href="#" class="block text-[#7db0ad] uppercase tracking-widest text-lg">Shop</a></li>
            <li><a href="#" class="block text-[#7db0ad] uppercase tracking-widest text-lg">About</a></li>
            <li><a href="#" class="block text-[#7db0ad] uppercase tracking-widest text-lg">FAQ</a></li>
            <li><a href="#" class="block text-[#7db0ad] uppercase tracking-widest text-lg">Contact</a></li>
        </ul>
    </div>
</div>

<!-- JavaScript for Mobile Menu & Dropdown -->
<script>
    document.getElementById('menu-toggle').addEventListener('click', function() {
        document.getElementById('mobile-menu').classList.toggle('hidden');
    });

    function toggleDropdown() {
        document.getElementById('dropdown-menu').classList.toggle('hidden');
    }
</script>
