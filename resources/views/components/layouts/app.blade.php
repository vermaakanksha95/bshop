<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Admin Panel | BiharShop' }}</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>

    @vite(['resources/css/app.css','resources/js/app.js'])
    @livewireStyles
</head>

<body>
    @include('components.navbar')
    <div class=" flex">
       
            <aside class="w-64 bg-gray-900 text-white h-screen p-4 ">
                <div class="text-xl font-bold mb-6">Admin Panel</div>
                <nav class="space-y-4">
                    <!-- <a href="/admin/dashboard" class="block px-4 py-2 hover:bg-gray-700 rounded">Dashboard</a>
                    <a href="/admin/orders" class="block px-4 py-2 hover:bg-gray-700 rounded">Orders</a> -->

                    <!-- Products Dropdown -->
                    <div class="relative">
                        <button onclick="document.getElementById('products-dropdown').classList.toggle('hidden')"
                            class="w-full flex justify-between px-4 py-2 hover:bg-gray-700 rounded focus:outline-none">
                            Category
                            <span>&#9662;</span>
                        </button>
                        <div id="products-dropdown" class="hidden ml-4 mt-2 space-y-2">
                            <a href="/admin/products/manage" class="block px-4 py-2 hover:bg-gray-700 rounded">Manage Products</a>
                            <a href="/admin/products/create" class="block px-4 py-2 hover:bg-gray-700 rounded">Create Product</a>
                        </div>
                    </div>
                    <div class="relative">
                        <button onclick="document.getElementById('products-dropdown').classList.toggle('hidden')"
                            class="w-full flex justify-between px-4 py-2 hover:bg-gray-700 rounded focus:outline-none">
                            Products
                            <span>&#9662;</span>
                        </button>
                        <div id="products-dropdown" class="hidden ml-4 mt-2 space-y-2">
                            <a href="/admin/products/manage" class="block px-4 py-2 hover:bg-gray-700 rounded">Manage Products</a>
                            <a href="/admin/products/create" class="block px-4 py-2 hover:bg-gray-700 rounded">Create Product</a>
                        </div>
                    </div>
                    <div class="relative">
                        <button onclick="document.getElementById('products-dropdown').classList.toggle('hidden')"
                            class="w-full flex justify-between px-4 py-2 hover:bg-gray-700 rounded focus:outline-none">
                            Products
                            <span>&#9662;</span>
                        </button>
                        <div id="products-dropdown" class="hidden ml-4 mt-2 space-y-2">
                            <a href="/admin/products/manage" class="block px-4 py-2 hover:bg-gray-700 rounded">Manage Products</a>
                            <a href="/admin/products/create" class="block px-4 py-2 hover:bg-gray-700 rounded">Create Product</a>
                        </div>
                    </div>

                    <!-- <a href="/admin/customers" class="block px-4 py-2 hover:bg-gray-700 rounded">Customers</a>
                    <a href="/admin/reports" class="block px-4 py-2 hover:bg-gray-700 rounded">Reports</a>
                    <a href="/admin/settings" class="block px-4 py-2 hover:bg-gray-700 rounded">Settings</a> -->
                </nav>
            </aside>

        

        <div>
            {{$slot}}
        </div>

    </div>


    @livewireScripts

    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>

</html>