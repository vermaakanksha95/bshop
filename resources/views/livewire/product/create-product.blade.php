<div class=" w-full mx-auto p-6 bg-white rounded-lg shadow-md">
    <h2 class="text-2xl font-semibold border-l-4 border-slate-700 pl-2 mb-6">Create Product</h2>

    <form wire:submit.prevent="save">
        <div class="grid grid-cols-2 gap-6">
            <!-- Product Name -->
            <div>
                <label class="block text-gray-700">Product Name</label>
                <input type="text" wire:model.live="name" class="w-full p-2 border rounded">
                @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <!-- Slug -->
            <div>
                <label class="block text-gray-700">Slug</label>
                <input type="text" wire:model.live="slug" class="w-full p-2 border rounded">
                @error('slug') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <!-- Category -->
            <div>
                <label class="block text-gray-700">Category</label>
                <select wire:model="category_id" class="w-full p-2 border rounded">
                    <option value="">Select Category</option>
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @foreach($category->subCategory as $subcat)
                    <option value="{{$subcat->id}}">&nbsp;&nbsp;{{$subcat->name}}</option>
                    @endforeach
                    @endforeach
                </select>
                @error('category_id') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <!-- Price -->
            <div>
                <label class="block text-gray-700">Price</label>
                <input type="number" wire:model="price" step="0.01" class="w-full p-2 border rounded">
                @error('price') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <!-- Discount Price -->
            <div>
                <label class="block text-gray-700">Discount Price</label>
                <input type="number" wire:model="discount_price" step="0.01" class="w-full p-2 border rounded">
                @error('discount_price') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <!-- Quantity -->
            <div>
                <label class="block text-gray-700">Quantity</label>
                <input type="number" wire:model="quantity" class="w-full p-2 border rounded">
                @error('quantity') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <!-- SKU -->
            <div>
                <label class="block text-gray-700">SKU</label>
                <input type="text" wire:model="sku" class="w-full p-2 border rounded">
                @error('sku') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <!-- Brand -->
            <div>
                <label class="block text-gray-700">Brand</label>
                <input type="text" wire:model="brand" class="w-full p-2 border rounded">
                @error('brand') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <!-- Product Image Upload -->
            <div class="col-span-2">
                <label class="block text-gray-700">Product Image</label>
                <input type="file" wire:model="image" class="w-full p-2 border rounded">
                @error('image') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <!-- Description (Full width) -->
            <div class="col-span-2">
                <label class="block text-gray-700">Description</label>
                <textarea rows="3" wire:model="description" class="w-full p-2 border rounded"></textarea>
                @error('description') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>


        </div>

        <!-- Submit Button -->
        <div class="mt-6">
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                Save Product
            </button>
        </div>
    </form>
</div>