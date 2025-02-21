<div class=" w-full  p-6 bg-white rounded-lg shadow-md">
    <h2 class="text-2xl font-semibold border-l-4 border-slate-700 pl-2 mb-6">Create Product</h2>

    <form wire:submit.prevent="store">
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

    <!-- Submit Button -->
        <div class="mt-6">
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                Save Product
            </button>
        </div>
    </form>
</div>