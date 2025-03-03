<div class="bg-gray-100">
  <!-- Product Categories Section -->
  <section class="py-16 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
      <!-- Section Title -->
      <h2 class="text-4xl sm:text-5xl  text-[#2e716b] text-center mb-12 animate__animated animate__fadeInDown">
        Women's Fashion Categories
      </h2>

      <!-- Category Grid -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Category Card 1 -->
         @foreach($categories as $category)
        <div class="bg-white rounded-lg shadow-xl overflow-hidden text-center p-6 hover:shadow-2xl transition-shadow duration-500 transform hover:-translate-y-2 animate__animated animate__fadeInUp">
          <div class="flex justify-center">
            <img
              src="https://images.unsplash.com/photo-1594631252845-29fc4cc8cde9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80"
              alt="Dresses"
              class="w-32 h-32 object-cover rounded-full transform hover:scale-110 transition-transform duration-500"
            />
          </div>
          <h3 class="text-2xl font-semibold text-gray-800 mt-6">{{ $category->name }}</h3>
          <p class="text-gray-600 mt-2">{{ $category->description }}</p>
        </div>
        @endforeach

        {{-- <!-- Category Card 2 -->
        <div class="bg-white rounded-lg shadow-xl overflow-hidden text-center p-6 hover:shadow-2xl transition-shadow duration-500 transform hover:-translate-y-2 animate__animated animate__fadeInUp animate__delay-1s">
          <div class="flex justify-center">
            <img
              src="https://images.unsplash.com/photo-1618354691373-d851c5c3a990?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80"
              alt="Tops"
              class="w-32 h-32 object-cover rounded-full transform hover:scale-110 transition-transform duration-500"
            />
          </div>
          <h3 class="text-2xl font-semibold text-gray-800 mt-6">Tops</h3>
          <p class="text-gray-600 mt-2">Discover stylish tops for every occasion.</p>
        </div>

        <!-- Category Card 3 -->
        <div class="bg-white rounded-lg shadow-xl overflow-hidden text-center p-6 hover:shadow-2xl transition-shadow duration-500 transform hover:-translate-y-2 animate__animated animate__fadeInUp animate__delay-2s">
          <div class="flex justify-center">
            <img
              src="https://images.unsplash.com/photo-1604176354204-9268737828e4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80"
              alt="Jeans"
              class="w-32 h-32 object-cover rounded-full transform hover:scale-110 transition-transform duration-500"
            />
          </div>
          <h3 class="text-2xl font-semibold text-gray-800 mt-6">Jeans</h3>
          <p class="text-gray-600 mt-2">Find the perfect pair of jeans for your style.</p>
        </div>

        <!-- Category Card 4 -->
        <div class="bg-white rounded-lg shadow-xl overflow-hidden text-center p-6 hover:shadow-2xl transition-shadow duration-500 transform hover:-translate-y-2 animate__animated animate__fadeInUp animate__delay-3s">
          <div class="flex justify-center">
            <img
              src="https://images.unsplash.com/photo-1551488831-00ddcb6c6bd3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80"
              alt="Jackets"
              class="w-32 h-32 object-cover rounded-full transform hover:scale-110 transition-transform duration-500"
            />
          </div>
          <h3 class="text-2xl font-semibold text-gray-800 mt-6">Jackets</h3>
          <p class="text-gray-600 mt-2">Stay warm and stylish with our jacket collection.</p>
        </div>

        <!-- Category Card 5 -->
        <div class="bg-white rounded-lg shadow-xl overflow-hidden text-center p-6 hover:shadow-2xl transition-shadow duration-500 transform hover:-translate-y-2 animate__animated animate__fadeInUp animate__delay-4s">
          <div class="flex justify-center">
            <img
              src="https://images.unsplash.com/photo-1595950653106-6c9ebd614d3a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80"
              alt="Activewear"
              class="w-32 h-32 object-cover rounded-full transform hover:scale-110 transition-transform duration-500"
            />
          </div>
          <h3 class="text-2xl font-semibold text-gray-800 mt-6">Activewear</h3>
          <p class="text-gray-600 mt-2">Get active in style with our sportswear range.</p>
        </div>

        <!-- Category Card 6 -->
        <div class="bg-white rounded-lg shadow-xl overflow-hidden text-center p-6 hover:shadow-2xl transition-shadow duration-500 transform hover:-translate-y-2 animate__animated animate__fadeInUp animate__delay-5s">
          <div class="flex justify-center">
            <img
              src="https://images.unsplash.com/photo-1618354691551-44de113f0164?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80"
              alt="Accessories"
              class="w-32 h-32 object-cover rounded-full transform hover:scale-110 transition-transform duration-500"
            />
          </div>
          <h3 class="text-2xl font-semibold text-gray-800 mt-6">Accessories</h3>
          <p class="text-gray-600 mt-2">Complete your look with our trendy accessories.</p>
        </div> --}}
      </div>
    </div>
  </section>

  <!-- Animate.css for Animations -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</div>