<div class="max-w-lg mx-auto mt-10 bg-white p-6 ">
    <form wire:submit.prevent="update">
        <div class="p-5 bg-gray-50 border border-gray-200 rounded-lg">
            <label class="block text-[#7db0ad] text-sm font-semibold mb-2">Product Image</label>

            @if($isEditing)
            <div>
                <input type="file" wire:model="photo" class="w-full px-3 py-2 border rounded-lg">
                <div wire:loading wire:target="photo" class="mt-2 text-[#7db0ad]">Uploading...</div>

                @if ($photo)
                <img src="{{ $photo->temporaryUrl() }}" class="mt-4 w-32 h-32 rounded-md shadow-md">
                @endif

                <div class="mt-2 flex gap-2">
                    <button type="submit" class="bg-[#7db0ad] text-white text-xs px-3 py-1 rounded-md hover:bg-[#5a8f89] transition-all">SAVE</button>
                    <button type="button" wire:click="cancel" class="bg-gray-500 text-white text-xs px-3 py-1 rounded-md hover:bg-gray-600 transition-all">CANCEL</button>
                </div>
            </div>
            @else
            <div class="flex items-center justify-between p-3 bg-gray-100 border border-gray-300 rounded-md hover:shadow-md hover:bg-gray-200 transition-all cursor-pointer">
                @if($product->image)
                <img src="{{ asset('storage/image/product/' . $product->image) }}" class="w-32 h-32 rounded-md">
                @else
                <span class="text-[#7db0ad]">No Image</span>
                @endif
                <button type="button" wire:click="edit" class="bg-[#7db0ad] text-white text-xs px-3 py-1 rounded-md hover:bg-[#5a8f89] transition-all">EDIT</button>
            </div>
            @endif
        </div>
    </form>

    @if(session()->has('message'))
    <div class="mt-4 p-3 bg-[#7db0ad] text-white rounded-md text-sm font-semibold hover:bg-[#699b99] transition-all">
        {{ session('message') }}
    </div>
    @endif
</div>