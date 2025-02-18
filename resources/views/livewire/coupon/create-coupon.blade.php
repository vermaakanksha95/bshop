<div>
    <div class="max-w-lg mx-auto p-6 bg-white shadow-md rounded-lg">
        <h2 class="text-2xl font-bold mb-4">Create Coupon</h2>
        <form >
           
            <div class="mb-4">
                <label class="block text-gray-700">Code</label>
                <input type="text" name="code" class="w-full border p-2 rounded">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Discount Type</label>
                <select name="discount_type" class="w-full border p-2 rounded" >
                    <option value="percentage">Percentage</option>
                    <option value="fixed">Fixed</option>
                </select>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Discount Value</label>
                <input type="number" name="discount_value" class="w-full border p-2 rounded">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Expiration Date</label>
                <input type="date" name="expiration_date" class="w-full border p-2 rounded">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Status</label>
                <select name="status" class="w-full border p-2 rounded">
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                </select>
            </div>
            <button type="submit" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded">Create</button>
        </form>
    </div>
</div>