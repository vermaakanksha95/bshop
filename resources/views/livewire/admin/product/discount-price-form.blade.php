<div>
    <div class="max-w-lg mx-auto mt-10 bg-white p-6">
        <form wire:submit.prevent="update">
            <div class="p-5 bg-gray-50 border border-gray-200">
                <label class="block text-[#7db0ad] text-sm font-semibold mb-2">Product Discount Price</label>

                @if($isEditing)
                <div>
                    <input type="number" wire:model.live="discount_price" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#7db0ad] hover:border-[#7db0ad] transition-all" placeholder="Enter new product discountprice">
                    <div class="mt-4 flex gap-3">
                        <button type="submit" class="bg-[#7db0ad] text-white px-4 py-2 rounded-md text-sm font-semibold hover:bg-[#699b99] hover:scale-105 transition-all">Save</button>
                        <button type="button" wire:click="cancel" class="bg-[#7db0ad] text-white px-4 py-2 rounded-md text-sm font-semibold hover:bg-[#699b99] hover:scale-105 transition-all">Cancel</button>
                    </div>
                </div>
                @else
                <div class="flex items-center justify-between p-3 bg-gray-100 border border-gray-300 rounded-md hover:shadow-md hover:bg-gray-200 transition-all cursor-pointer">
                    <span class="text-[#7db0ad] font-medium">{{ $product->discount_price }}</span>
                    <button type="button" wire:click="edit" class="bg-[#7db0ad] text-white px-3 py-2 rounded-md text-sm font-semibold hover:bg-[#699b99] hover:scale-105 transition-all">Edit</button>
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

</div>