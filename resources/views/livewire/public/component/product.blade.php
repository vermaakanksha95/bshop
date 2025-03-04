<div class="bg-gray-100">
  <!-- Featured Products Section -->
  <section class="py-16 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
      <!-- Section Title -->
      <h2 class="text-4xl sm:text-5xl  text-[#2e716b] text-center mb-12 animate__animated animate__fadeInDown">
        Featured Products
      </h2>

      <!-- Product Grid -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">

        <!-- Product Card 1 -->
         @foreach($products as $product)
          <a href="{{ route('single-view', $product->slug) }}">
            <div class="bg-white rounded-lg shadow-xl overflow-hidden hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 animate__animated animate__fadeInUp">
          <img
            src="photo3.jpg"
            alt="Product 1"
            class="w-full h-64 object-cover transform hover:scale-105 transition-transform duration-500"
          />
          <div class="p-6">
            <!-- Product Name -->
            <h3 class="text-2xl font-semibold text-gray-800 mb-2">{{ $product->name }}</h3>
            <!-- Product Price -->
            <p class="text-[#2e716b] font-bold text-xl mb-4">₹{{ $product->price }}</p>
            <!-- Wishlist Icon and Add to Cart Button -->
            <div class="flex items-center justify-between">
              <!-- Wishlist Icon -->
              <button wire:click.prevent="toggleWishlist({{ $product->id }}) class="text-gray-500 hover:text-[#2e716b] transition-colors duration-300">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                </svg>
              </button>
              <!-- Add to Cart Button -->
              <button class="bg-[#2e716b] text-white px-6 py-2 rounded-lg hover:bg-[#3a8a82] transition-colors duration-300">
                Add to Cart
              </button>
            </div>
          </div>
        </div>
            
          </a>
        @endforeach
       

        
      </div>
    </div>
  </section>

  <!-- Animate.css for Animations -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</div>