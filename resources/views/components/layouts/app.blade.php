<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Admin Panel | BiharShop' }}</title>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>

    @vite(['resources/css/app.css','resources/js/app.js'])
    @livewireStyles
</head>

<body>
    @include('components.navbar')
<div class="flex">
    <div class="  gap-6  w-4/12  ">
        <!-- Sidebar -->
        <div class=" fixed bg-[#7db0ad] text-white p-5 space-y-6 h-screen text-xl  ">
            <h2 class="text-xl font-bold">Admin Panel</h2>

            <ul>
                <li x-data="{ open: false }">
                    <button @click="open = !open" class="w-full flex justify-between p-3 rounded-md hover:bg-[#2e716b]">
                        Category
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-transform" :class="{'rotate-180': open}" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06-.02L10 10.06l3.71-3.87a.75.75 0 111.08 1.04l-4.25 4.44a.75.75 0 01-1.08 0L5.21 8.27a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <ul x-show="open" class="ml-5 mt-2 space-y-2">
                        <li><a href="{{route('category.create-category')}}" class="block p-2 rounded-md hover:bg-[#2e716b]">Create Category</a></li>

                    </ul>
                    <ul x-show="open" class="ml-5 mt-2 space-y-2">
                        <li><a href="{{route('category.manage-category')}}" class="block p-2 rounded-md hover:bg-[#2e716b]">Manage Category</a></li>

                    </ul>
                </li>

                <li x-data="{ open: false }">
                    <button @click="open = !open" class="w-full flex justify-between p-3 rounded-md hover:bg-[#2e716b]">
                        Product
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-transform" :class="{'rotate-180': open}" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06-.02L10 10.06l3.71-3.87a.75.75 0 111.08 1.04l-4.25 4.44a.75.75 0 01-1.08 0L5.21 8.27a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <ul x-show="open" class="ml-5 mt-2 space-y-2">
                        <li><a href="{{route('product.create-product')}}" class="block p-2 rounded-md hover:bg-[#2e716b]">Create Product</a></li>
                        <li><a href="{{route('product.manage-product')}}" class="block p-2 rounded-md hover:bg-[#2e716b]">Manage Product</a></li>
                    </ul>
                </li>
                <li x-data="{ open: false }">
                    <button @click="open = !open" class="w-full flex justify-between p-3 rounded-md hover:bg-[#2e716b]">
                        Coupon
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-transform" :class="{'rotate-180': open}" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06-.02L10 10.06l3.71-3.87a.75.75 0 111.08 1.04l-4.25 4.44a.75.75 0 01-1.08 0L5.21 8.27a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <ul x-show="open" class="ml-5 mt-2 space-y-2">
                        <li><a href="{{route('coupon.create-coupon')}}" class="block p-2 rounded-md hover:bg-[#2e716b]">Create Coupon</a></li>
                        <li><a href="{{route('coupon.manage-coupon')}}" class="block p-2 rounded-md hover:bg-[#2e716b]">Manage Coupon</a></li>
                    </ul>
                </li>
                <li x-data="{ open: false }">
                    <button @click="open = !open" class="w-full flex justify-between p-3 rounded-md hover:bg-[#2e716b]">
                        Address
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-transform" :class="{'rotate-180': open}" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06-.02L10 10.06l3.71-3.87a.75.75 0 111.08 1.04l-4.25 4.44a.75.75 0 01-1.08 0L5.21 8.27a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <ul x-show="open" class="ml-5 mt-2 space-y-2">
                        <li><a href="{{route('address.create-address')}}" class="block p-2 rounded-md hover:bg-[#2e716b]">Create Address</a></li>
                        <li><a href="{{route('address.manage-address')}}" class="block p-2 rounded-md hover:bg-[#2e716b]">Manage Address</a></li>
                    </ul>
                </li>
                <li x-data="{ open: false }">
                    <button @click="open = !open" class="w-full flex justify-between p-3 rounded-md hover:bg-[#2e716b]">
                        Order
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-transform" :class="{'rotate-180': open}" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06-.02L10 10.06l3.71-3.87a.75.75 0 111.08 1.04l-4.25 4.44a.75.75 0 01-1.08 0L5.21 8.27a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <ul x-show="open" class="ml-5 mt-2 space-y-2">
                        <li><a href="{{route('order.create-order')}}" class="block p-2 rounded-md hover:bg-[#2e716b]">Create Order</a></li>
                        <li><a href="{{route('order.manage-order')}}" class="block p-2 rounded-md hover:bg-[#2e716b]">Manage Order</a></li>
                    </ul>
                </li>
                <!-- <li x-data="{ open: false }">
                    <button @click="open = !open" class="w-full flex justify-between p-3 rounded-md hover:bg-gray-700">
                        Category
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-transform" :class="{'rotate-180': open}" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06-.02L10 10.06l3.71-3.87a.75.75 0 111.08 1.04l-4.25 4.44a.75.75 0 01-1.08 0L5.21 8.27a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <ul x-show="open" class="ml-5 mt-2 space-y-2">
                        <li><a href="#" class="block p-2 rounded-md hover:bg-gray-700">Manage Category</a></li>
                        <li><a href="#" class="block p-2 rounded-md hover:bg-gray-700">Create Category</a></li>
                    </ul>
                </li> -->

                <!-- <li><a href="#" class="block p-3 rounded-md hover:bg-gray-700">Order</a></li>
                <li><a href="#" class="block p-3 rounded-md hover:bg-gray-700">Customers</a></li> -->
            </ul>
        </div>

    </div>
        <div class=" w-8/12">
            {{$slot}}

        </div>


    </div>





    @livewireScripts

    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>

</html>