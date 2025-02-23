<div>
    <form class="bg-gray-100 p-6 relative m-10">
        <!-- Product Variants Section -->
        <div class="mt-4">
            <h3 class="text-lg font-semibold mb-4 text-[#7db0ad]">Product Variants</h3>

            <!-- Variant Form Fields -->
            <div class="grid grid-cols-1 md:grid-cols-5 gap-4 mb-4">
                <div>
                    <label class="block font-semibold mb-2 text-[#7db0ad]">Variant Type</label>
                    <select class="mt-1 block w-full border border-gray-300 rounded px-3 py-2 text-[#7db0ad]">
                        <option value="">Select Variant Type</option>
                        <option value="size">Size</option>
                        <option value="color">Color</option>
                        <option value="material">Material</option>
                    </select>
                </div>

                <div>
                    <label class="block font-semibold mb-2 text-[#7db0ad]">Variant Value</label>
                    <input type="text" class="mt-1 block w-full border border-gray-300 rounded px-3 py-2 text-[#7db0ad]" placeholder="e.g., Red, XL" />
                </div>

                <div>
                    <label class="block font-semibold mb-2 text-[#7db0ad]">Variant Price</label>
                    <input type="text" class="mt-1 block w-full border border-gray-300 rounded px-3 py-2 text-[#7db0ad]" placeholder="Enter Variant Price" />
                </div>

                <div>
                    <label class="block font-semibold mb-2 text-[#7db0ad]">Variant Stock</label>
                    <input type="text" class="mt-1 block w-full border border-gray-300 rounded px-3 py-2 text-[#7db0ad]" placeholder="Enter Variant Stock" />
                </div>

                <!-- Remove Variant Button -->
                <div class="flex items-end">
                    <button type="button" class="bg-red-400 text-white px-4 py-2 rounded hover:bg-red-600">Remove</button>
                </div>
            </div>
        </div>

        <!-- Buttons -->
        <div class="mt-6 flex justify-end">
            <button type="button" class="bg-[#7db0ad] text-white px-4 py-2 rounded hover:bg-[#5a8f89]">
                Add Variant
            </button>

            <button type="submit" class="bg-[#7db0ad] text-white px-4 py-2 rounded hover:bg-[#5a8f89] ml-4">
                Update Product
            </button>
        </div>
    </form>
</div>