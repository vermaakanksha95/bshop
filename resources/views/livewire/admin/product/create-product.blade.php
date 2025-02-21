<div class="w-full p-6 bg-white">
    <h2 class="text-2xl font-semibold border-l-4 border-[#7db0ad] pl-2 mb-6 text-[#7db0ad]">
        Create Product
    </h2>

    <form wire:submit.prevent="store">
        <div class="grid grid-cols-2 gap-6">
            <!-- Product Name -->
            <div>
                <label class="block text-[#7db0ad]">Product Name</label>
                <input type="text" wire:model.live="name" class="w-full p-2 border border-[#7db0ad] rounded text-[#7db0ad]">
                @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <!-- Slug -->
            <div>
                <label class="block text-[#7db0ad]">Slug</label>
                <input type="text" wire:model.live="slug" class="w-full p-2 border border-[#7db0ad] rounded text-[#7db0ad]">
                @error('slug') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>
        </div>

        <!-- Submit Button -->
        <div class="mt-6">
            <button type="submit" class="bg-[#7db0ad] text-white px-4 py-2 rounded hover:bg-[#689e9b]">
                Save Product
            </button>
        </div>
    </form>
</div>