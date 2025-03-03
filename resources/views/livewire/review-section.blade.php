<div>
    <!-- Existing Reviews -->
    <h2 class="text-2xl font-semibold mb-6 text-[#7db0ad]">Customer Reviews</h2>
    <div class="space-y-6">
        @foreach ($reviews as $review)
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                <div class="flex items-center justify-between">
                    <p class="font-semibold text-lg text-[#7db0ad]">{{ $review->name }}</p>
                    <p class="text-gray-500 text-sm">{{ $review->created_at->format('F j, Y') }}</p>
                </div>
                <div class="flex items-center mt-2">
                    @for ($i = 1; $i <= 5; $i++)
                        <span class="text-yellow-500 text-xl">{{ $i <= $review->rating ? '★' : '☆' }}</span>
                    @endfor
                </div>
                <p class="mt-4 text-gray-600 leading-relaxed">{{ $review->review }}</p>
            </div>
        @endforeach
    </div>

    <!-- Review Form -->
    <div class="mt-10">
        <h3 class="text-xl font-semibold mb-6 text-[#7db0ad]">Write a Review</h3>
        <form wire:submit.prevent="submitReview" class="bg-white p-6 rounded-lg shadow-md">
            <!-- Name -->
            <div class="mb-4">
                <label for="name" class="block text-[#7db0ad] font-medium mb-2">Name</label>
                <input type="text" id="name" wire:model="name" class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-[#7db0ad] focus:border-transparent" >
            </div>

            <!-- Rating -->
            <div class="mb-4">
                <label for="rating" class="block text-[#7db0ad] font-medium mb-2">Rating</label>
                <select id="rating" wire:model="rating" class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-[#7db0ad] focus:border-transparent" >
                    <option value="5">★★★★★</option>
                    <option value="4">★★★★☆</option>
                    <option value="3">★★★☆☆</option>
                    <option value="2">★★☆☆☆</option>
                    <option value="1">★☆☆☆☆</option>
                </select>
            </div>

            <!-- Review -->
            <div class="mb-6">
                <label for="review" class="block text-[#7db0ad] font-medium mb-2">Review</label>
                <textarea id="review" wire:model="review" class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-[#7db0ad] focus:border-transparent" rows="5" required></textarea>
            </div>

            <!-- Submit Button -->
            <div>
                <button type="submit" class="w-full bg-[#7db0ad] text-white font-semibold py-3 px-6 rounded-lg hover:bg-[#6a9c9a] transition-colors duration-300">
                    Submit Review
                </button>
            </div>
        </form>

        <!-- Success Message -->
        @if (session()->has('message'))
            <div class="mt-6 p-4 bg-green-50 border-l-4 border-green-500 text-green-700">
                <p>{{ session('message') }}</p>
            </div>
        @endif
    </div>
</div>