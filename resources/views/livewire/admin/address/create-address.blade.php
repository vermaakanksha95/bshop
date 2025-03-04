<div class="min-h-screen flex items-center justify-center p-6">
    <div class="rounded-sm bg-white p-6 w-full max-w-4xl">
        <form wire:submit.prevent="saveAddress">
            <!-- User ID (hidden if passed from parent) -->
            <input type="hidden" wire:model="user_id">

            <!-- Grid Layout -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Name -->
                <div class="mb-4">
                    <label class="mb-3 block text-sm font-medium text-gray-800">
                        Name
                    </label>
                    <input type="text" wire:model="name" placeholder="Enter name"
                        class="w-full rounded border border-gray-300 bg-white px-5 py-3 text-gray-700 font-normal" />
                    @error('name')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Phone -->
                <div class="mb-4">
                    <label class="mb-3 block text-sm font-medium text-gray-800">
                        Phone
                    </label>
                    <input type="text" wire:model="phone" placeholder="Enter phone number"
                        class="w-full rounded border border-gray-300 bg-white px-5 py-3 text-gray-700 font-normal" />
                    @error('phone')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Alternate Phone -->
                <div class="mb-4">
                    <label class="mb-3 block text-sm font-medium text-gray-800">
                        Alternate Phone
                    </label>
                    <input type="text" wire:model="alt_phone" placeholder="Enter alternate phone number"
                        class="w-full rounded border border-gray-300 bg-white px-5 py-3 text-gray-700 font-normal" />
                    @error('alt_phone')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Address Type -->
                <div class="mb-4">
                    <label class="mb-3 block text-sm font-medium text-gray-800">
                        Address Type
                    </label>
                    <input type="text" wire:model="address_type" placeholder="Enter address type"
                        class="w-full rounded border border-gray-300 bg-white px-5 py-3 text-gray-700 font-normal" />
                    @error('address_type')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Landmark -->
                <div class="mb-4">
                    <label class="mb-3 block text-sm font-medium text-gray-800">
                        Landmark
                    </label>
                    <input type="text" wire:model="landmark" placeholder="Enter landmark"
                        class="w-full rounded border border-gray-300 bg-white px-5 py-3 text-gray-700 font-normal" />
                    @error('landmark')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Street -->
                <div class="mb-4">
                    <label class="mb-3 block text-sm font-medium text-gray-800">
                        Street
                    </label>
                    <input type="text" wire:model="street" placeholder="Enter street"
                        class="w-full rounded border border-gray-300 bg-white px-5 py-3 text-gray-700 font-normal" />
                    @error('street')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Area -->
                <div class="mb-4">
                    <label class="mb-3 block text-sm font-medium text-gray-800">
                        Area
                    </label>
                    <input type="text" wire:model="area" placeholder="Enter area"
                        class="w-full rounded border border-gray-300 bg-white px-5 py-3 text-gray-700 font-normal" />
                    @error('area')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Address Line -->
                <div class="mb-4 md:col-span-2">
                    <label class="mb-3 block text-sm font-medium text-gray-800">
                        Address Line
                    </label>
                    <textarea rows="3" wire:model="address_line" placeholder="Enter address line"
                        class="w-full rounded border border-gray-300 bg-white px-5 py-3 text-gray-700 font-normal"></textarea>
                    @error('address_line')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>

                <!-- City -->
                <div class="mb-4">
                    <label class="mb-3 block text-sm font-medium text-gray-800">
                        City
                    </label>
                    <input type="text" wire:model="city" placeholder="Enter city"
                        class="w-full rounded border border-gray-300 bg-white px-5 py-3 text-gray-700 font-normal" />
                    @error('city')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>

                <!-- State -->
                <div class="mb-4">
                    <label class="mb-3 block text-sm font-medium text-gray-800">
                        State
                    </label>
                    <input type="text" wire:model="state" placeholder="Enter state"
                        class="w-full rounded border border-gray-300 bg-white px-5 py-3 text-gray-700 font-normal" />
                    @error('state')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Postal Code -->
                <div class="mb-4">
                    <label class="mb-3 block text-sm font-medium text-gray-800">
                        Postal Code
                    </label>
                    <input type="text" wire:model="postal_code" placeholder="Enter postal code"
                        class="w-full rounded border border-gray-300 bg-white px-5 py-3 text-gray-700 font-normal" />
                    @error('postal_code')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Status -->
                <div class="mb-4 md:col-span-2">
                    <label class="mb-3 block text-sm font-medium text-gray-800">
                        Status
                    </label>
                    <input type="checkbox" wire:model="status" class="rounded border-gray-300">
                    @error('status')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <!-- Submit Button -->
            <div class="mt-6">
                <button type="submit"
                    class="flex text-white justify-center rounded bg-[#7db0ad] p-3 font-medium hover:bg-[#2d6561b1] w-full">
                    Save Address
                </button>
            </div>

            <!-- Success Message -->
            @if (session()->has('message'))
            <div class="mt-4 p-2 bg-[#7db0ad] text-white rounded-md text-center">
                {{ session('message') }}
            </div>
            @endif
        </form>
    </div>
</div>