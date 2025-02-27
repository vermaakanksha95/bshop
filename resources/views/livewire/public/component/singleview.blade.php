<div class="max-w-6xl mx-auto py-10 px-6 grid grid-cols-1 md:grid-cols-2 gap-10 mt-20">
    <!-- Product Image -->
    <div>
        <img src="p1.avif" alt="Product Image" class="w-full rounded-lg shadow-md">
    </div>

    <!-- Product Details -->
    <div>
        <h1 class="text-3xl font-semibold">I'm a product</h1>
        <p class="text-gray-500">SKU: 0012</p>
        <p class="text-2xl font-bold mt-2">150.00</p>

        <!-- Size Selector -->
        <div class="mt-4">
            <label for="size" class="block text-gray-600">Size</label>
            <select id="size" class="w-full border rounded p-2">
                <option>Select</option>
                <option>S</option>
                <option>M</option>
                <option>L</option>
                <option>XL</option>
            </select>
        </div>

        <!-- Color Selector -->
        <div class="mt-4">
            <label class="block text-gray-600">Color: Black</label>
            <div class="flex items-center mt-2">
                <div class="w-6 h-6 rounded-full border-2 border-black bg-black"></div>
            </div>
        </div>

        <!-- Quantity Selector -->
        <div class="mt-4">
            <label for="quantity" class="block text-gray-600">Quantity</label>
            <input type="number" id="quantity" class="w-full border rounded p-2" value="1">
        </div>

        <!-- Buttons -->
        <div class="mt-6 flex gap-4">
            <button class="w-full border border-gray-600 rounded p-3 hover:bg-gray-100">Add to Cart</button>
            <button class="w-full bg-black text-white rounded p-3">Buy Now</button>
        </div>
    </div>
</div>