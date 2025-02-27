<div class="flex-1 p-6">
    <div class=" flex justify-between items-center">
        <h1 class="text-2xl font-bold">Manage Coupons</h1>
        <a href="coupon/create-coupon" class=" px-4 py-2 text-white bg-[#7db0ad] rounded  text-xl ">Create Coupon</button>
    </div>
    <div class="mt-6 bg-white p-4 ">
        <table class="w-full border-collapse border border-gray-200">
            <thead>
                <tr class="bg-gray-100">
                    <th class="border p-2">Coupon Code</th>
                    <th class="border p-2">Discount Type</th>
                    <th class="border p-2">Discount Value</th>
                    <th class="border p-2">Expiration Date</th>
                    <th class="border p-2">Action</th>
                </tr>
            </thead>
         <tbody>
    @if ($coupons->count() > 0)
        @foreach ($coupons as $coupon)
            <tr>
                <td class="border p-2">{{ $coupon->code }}</td>
                <td class="border p-2">{{ $coupon->discount_type }}</td>
                <td class="border p-2">{{ $coupon->discount_value }}</td>
                <td class="border p-2">{{ $coupon->expiration_date }}</td>
                <td class="border p-2">
                    <button wire:click="edit({{ $coupon->id }})" class="bg-blue-500 text-white px-3 py-1 rounded">Edit</button>
                    <button wire:click="delete({{ $coupon->id }})" class="bg-red-500 text-white px-3 py-1 rounded ml-2">Delete</button>
                </td>
            </tr>
        @endforeach
    @else
        <tr>
            <td colspan="5" class="text-center p-4 text-gray-500">No coupons available.</td>
        </tr>
    @endif
</tbody>


        </table>
    </div>