<div>
    <form wire:submit.prevent="update" class="bg-gray-100 p-6 relative m-10">
        <!-- Product Variants Section -->
        <div class="mt-4">
            <h3 class="text-lg font-semibold mb-4 text-[#7db0ad]">Product Variants</h3>
            @foreach ($variants as $index => $variant)
            <!-- Variant Form Fields -->
            <div class="grid grid-cols-1 md:grid-cols-5 gap-4 mb-4">
                <div>
                    <label for="variant_type_{{$index}}" class="block font-semibold mb-2 text-[#7db0ad]">Variant Type</label>
                    <select id="variant_type_{{$index}}" wire:model="variants.{{$index}}.type" class="mt-1 block w-full border border-gray-300 rounded px-3 py-2 text-[#7db0ad]">
                        <option value="">Select Variant Type</option>
                        <option value="size">Size</option>
                        <option value="color">Color</option>
                        <option value="material">Material</option>
                    </select>
                    @error('variants.'.$index.'.type') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label for="variant_value_{{$index}}" class="block font-semibold mb-2 text-[#7db0ad]">Variant Value</label>
                    <input type="text" id="variant_value_{{ $index }}" wire:model="variants.{{ $index }}.value" class="mt-1 block w-full border border-gray-300 rounded px-3 py-2 text-[#7db0ad]" placeholder="e.g., Red, XL" />
                    @error('variants.'.$index.'.value') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label for="variant_price_{{$index}}" class="block font-semibold mb-2 text-[#7db0ad]">Variant Price</label>
                    <input type="text" id="variant_price_{{$index}}" wire:model="variants.{{$index}}.price" class="mt-1 block w-full border border-gray-300 rounded px-3 py-2 text-[#7db0ad]" placeholder="Enter Variant Price" />
                    @error('variants.'.$index.'.price') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label for="variant_stock_{{$index}}" class="block font-semibold mb-2 text-[#7db0ad]">Variant Stock</label>
                    <input type="text" id="variant_stock_{{$index}}" wire:model="variants.{{$index}}.stock" class="mt-1 block w-full border border-gray-300 rounded px-3 py-2 text-[#7db0ad]" placeholder="Enter Variant Stock" />
                </div>

                <!-- Remove Variant Button -->
                <div class="flex items-end">
                    <button type="button" wire:click="removeVariant({{$index}})" class="bg-red-400 text-white px-4 py-2 rounded hover:bg-red-600">Remove</button>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Buttons -->
        <div class="mt-6 flex justify-end gap-2">
            <button type="button" wire:click="addVariant" class="bg-[#7db0ad] text-white px-4 py-2 rounded hover:bg-[#5a8f89]">
                Add Variant
            </button>
            <button type="submit" class="bg-[#7db0ad] text-white px-4 py-2 rounded hover:bg-[#5a8f89]">
                Update Product
            </button>
        </div>
    </form>
</div>