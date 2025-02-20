<div>
    <div class="w-full py-3 bg-[#7db0ad]">
        <h1 class="text-center font-light text-white text-xl">FREE SHIPPING WORLDWIDE</h1>
    </div>

    <div class="flex items-center justify-between px-6 py-4 bg-white shadow-md">
        <!-- Mobile Menu Button -->
        <button id="menu-toggle" class="block md:hidden text-[#7db0ad] text-2xl">
            &#9776;
        </button>

        <!-- Left: Navigation Links -->
        <ul id="menu" class="hidden md:flex space-x-6 text-[#7db0ad] uppercase tracking-widest text-lg">
            <li><a href="#">Shop</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">Contact</a></li>
        </ul>

        <!-- Center: Logo -->
        <div class="text-3xl font-bold text-[#7db0ad] tracking-wider">
            BiharShop
        </div>

        <!-- Right: Login and Social Icons -->
        <div class="flex items-center space-x-4">
            <div class="hidden md:flex items-center space-x-2 text-gray-800">
                <span class="bg-gray-800 text-white w-6 h-6 flex items-center justify-center rounded-full">👤</span>
                <a href="#" class="text-sm">Log In</a>
            </div>
            <a href="#"><img src="https://cdn-icons-png.flaticon.com/512/124/124010.png" class="w-5 h-5"></a>
            <a href="#"><img src="https://cdn-icons-png.flaticon.com/512/2111/2111463.png" class="w-5 h-5"></a>
            <a href="#"><img src="https://cdn-icons-png.flaticon.com/512/145/145808.png" class="w-5 h-5"></a>
        </div>
    </div>

    <!-- Mobile Navigation -->
    <ul id="mobile-menu" class="hidden md:hidden flex flex-col bg-white w-full py-4 space-y-2 text-center shadow-md">
        <li><a href="#" class="block text-[#7db0ad] uppercase tracking-widest text-lg">Shop</a></li>
        <li><a href="#" class="block text-[#7db0ad] uppercase tracking-widest text-lg">About</a></li>
        <li><a href="#" class="block text-[#7db0ad] uppercase tracking-widest text-lg">FAQ</a></li>
        <li><a href="#" class="block text-[#7db0ad] uppercase tracking-widest text-lg">Contact</a></li>
    </ul>
</div>

<script>
    document.getElementById('menu-toggle').addEventListener('click', function() {
        document.getElementById('mobile-menu').classList.toggle('hidden');
    });
</script>