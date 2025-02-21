<div class=" w-full mx-auto p-6 bg-white  mt-5">
    <div class="flex justify-between items-center">
        <h2 class="text-2xl font-bold mb-4">Create Coupon</h2>
        <button class=" px-4 py-2 bg-slate-500 text-white rounded">Manage Coupon</button>
    </div>
    <form wire:submit.prevent="store">

        <div class=" grid grid-cols-2 gap-6">
            <div class="mb-4">
                <label class="block text-gray-700">Code</label>
                <input type="text" wire:model="code" class="w-full border p-2 rounded">
                @error('code') <span class="text-red-500">{{ $message }}</span> @enderror

            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Discount Type</label>
                <select wire:model="discount_type" class="w-full border p-2 rounded">
                    <option value="percentage">Percentage</option>
                    <option value="fixed">Fixed</option>
                </select>
                @error('discount_type') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class=" grid grid-cols-2 gap-6">
            <div class="mb-4">
                <label class="block text-gray-700">Discount Value</label>
                <input type="number" wire:model="discount_value" class="w-full border p-2 rounded">
                @error('discount_value') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Expiration Date</label>
                <input type="date" wire:model="expiration_date" class="w-full border p-2 rounded">
                @error('expiration_date') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
        </div>

        <button type="submit" class="bg-slate-500 hover:bg-slate-600 text-white px-8 py-2 rounded items-center text-center">Create</button>
    </form>
</div>