<div>
    <section class="relative h-screen flex items-center justify-center bg-cover bg-center" style="background-image: url('design.gif');">
    <!-- Overlay for better readability -->
    {{-- <div class="absolute inset-0 bg-black bg-opacity-50"></div> --}}

    <!-- Content -->
    <div class="relative z-10 text-center px-4 sm:px-6 lg:px-8">
      <!-- Headline -->
      <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white mb-4">
        Discover the Latest Trends
      </h1>

      <!-- Tagline -->
      <p class="text-lg sm:text-xl lg:text-2xl text-gray-200 mb-8">
        Elevate your style with our exclusive collection of trendy clothing.
      </p>

      <!-- Shop Now Button -->
       <a
        href="#"
        class="inline-block bg-white text-[#2e716b] font-semibold px-8 py-3 rounded-lg shadow-lg hover:bg-gray-100 transition duration-300"
      >
        Shop Now
      </a>
    </div>
  </section>
  @livewire('public.component.product')
  @livewire('public.component.category')
  
  <!-- About Us Section -->
 
<div class="bg-gray-100">
  <!-- About Us Section -->
  <section class="py-16 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
      <!-- Grid Layout -->
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
        <!-- Image Section -->
        <div class="relative animate__animated animate__fadeInLeft">
          <img
            src="team.jpeg"
            alt="Team"
            class="w-full h-96 rounded-lg shadow-lg transform hover:scale-105 transition-transform duration-500"
          />
          <!-- Optional Overlay -->
          <div class="absolute inset-0 bg-[#2e716b] bg-opacity-20 rounded-lg hover:bg-opacity-0 transition-all duration-500"></div>
        </div>

        <!-- Text Section -->
        <div class="space-y-6">
          <!-- Introduction -->
          <h2 class="text-4xl sm:text-5xl font-bold text-[#2e716b] animate__animated animate__fadeInDown">
            About Us
          </h2>
          <p class="text-lg text-gray-700 animate__animated animate__fadeIn animate__delay-1s">
            Welcome to <span class="font-semibold">BiharShop</span>, your go-to destination for trendy and affordable fashion. We believe that everyone deserves to look and feel their best, and we’re here to make that possible with our carefully curated collection of clothing.
          </p>

          <!-- What Makes Us Unique -->
          <div class="bg-white p-6 rounded-lg shadow-md animate__animated animate__fadeInUp animate__delay-2s">
            <h3 class="text-2xl font-bold text-[#2e716b] mb-4">What Makes Us Unique</h3>
            <p class="text-gray-700">
              At BiharShop, we’re passionate about sustainability and quality. Our products are sourced from ethical suppliers, and we’re committed to reducing our environmental footprint. With a focus on inclusivity, we offer a wide range of sizes and styles to suit every body type and personality. Join us in redefining fashion!
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<!-- Animate.css for Animations -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

@livewire('public.component.customer-review')
@livewire('public.component.offer')
{{-- <img src="dummy img.png" alt=""> --}}
   <livewire:chat-component />
</div>

