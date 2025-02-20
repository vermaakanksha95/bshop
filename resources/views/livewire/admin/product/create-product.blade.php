<div class=" w-full  p-6 bg-white rounded-lg shadow-md">
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
            <div class="mb-4">
                <label class="mb-3 block text-sm font-medium text-black ">
                    Product Image
                </label>
                <div class="flex flex-1 md:flex-row flex-col gap-5">
                    <div class="flex-1">
                        <div class="flex items-center justify-center w-full">
                            <label for="dropzone-file"
                                class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50  dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                    <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                    </svg>
                                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span
                                            class="font-semibold">Click to upload</span> or drag and drop</p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF
                                        (MAX. 800x400px)</p>
                                </div>
                                <input id="dropzone-file" wire:model="photo" type="file" class="hidden" />
                            </label>
                        </div>
                    </div>

                    <div
                        class="flex flex-1 flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg bg-gray-50dark:bg-gray-700 dark:border-gray-600  overflow-hidden p-3">
                        @if ($photo)
                        <img src="{{ $photo->temporaryUrl() }}" class="object-cover">
                        @else
                        <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span
                                class="font-semibold">Image Preview</span></p>
                        @endif
                    </div>

                </div>
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