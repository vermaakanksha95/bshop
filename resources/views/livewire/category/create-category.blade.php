<div class="max-w-3xl mx-auto bg-white p-6 rounded-lg shadow-lg">
    <h2 class="text-2xl font-bold mb-6 text-gray-700">Create Category</h2>
    <form wire:submit.prevent = "save" >
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Category Name -->
            <div class="mb-4">
                <label class="block text-gray-700">Category Name</label>
                <input type="text"  wire:model="name" class="w-full p-2 border rounded">
                @error('name') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Category Slug</label>
                <input type="text"  wire:model="cat_slug" class="w-full p-2 border rounded">
                @error('cat_slug') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
            <!-- Parent Category -->
            <div class="mb-4">
                <label class="block text-gray-700">Parent Category</label>
                <select wire:model="parent_category_id" class="w-full p-2 border rounded">
                    <option value="">No Parent</option>
                    <option value="1">Category 1</option>
                    <option value="2">Category 2</option>
                </select>
            </div>

            <!-- Description (Full width) -->
            <div class="md:col-span-2 mb-4">
                <label class="block text-gray-700">Description</label>
                <textarea rows="2" wire:model="cat_description" class="w-full p-2 border rounded"></textarea>
                @error('cat_description') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>

            <!-- Image Upload -->
            <div class="md:col-span-2 flex items-center justify-center w-full">
                <label for="dropzone-file" class="flex flex-col items-center justify-center   w-full  h-48 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100 relative">
                    <div id="upload-icon" class="flex flex-col items-center justify-center pt-5 pb-6">
                        <svg class="w-8 h-8 mb-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                        </svg>
                        <p class="mb-2 text-sm text-gray-500"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                        <p class="text-xs text-gray-500">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                    </div>
                    <input id="dropzone-file" type="file" class="hidden" accept="image/*" onchange="previewImage(event)" />
                    <img id="preview-img" class="absolute inset-0 w-full h-full object-cover rounded-lg hidden" />
                </label>
            </div>
        </div>

        <!-- Submit Button -->
        <div class="mt-6">
            <button type="submit" class=" bg-slate-500 text-white font-semibold px-4 py-2 rounded-lg hover:bg-slate-600">
                Save Category
            </button>
        </div>
    </form>
</div>