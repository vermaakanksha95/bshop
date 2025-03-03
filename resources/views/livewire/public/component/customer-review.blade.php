<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Customer Reviews</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Font Awesome for Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  <!-- Swiper.js CSS -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
</head>
<body class="bg-gray-100">
  <!-- Customer Reviews Section -->
  <section class="py-16 px-4 sm:px-6 lg:px-8 bg-gradient-to-r from-[#2e716b] to-[#3a8a82]">
    <div class="max-w-7xl mx-auto">
      <!-- Section Title -->
      <h2 class="text-3xl text-[#2e716b] font-bold  text-center mb-8">
        What Our Customers Say
      </h2>

      <!-- Swiper Container -->
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <!-- Review Card 1 -->
          <div class="swiper-slide">
            <div class="bg-white rounded-lg shadow-lg p-6 text-center transform hover:scale-105 transition-transform duration-300">
              <!-- User Icon -->
              <div class="flex justify-center mb-4">
                <div class="w-16 h-16 rounded-full bg-[#2e716b] flex items-center justify-center">
                  <i class="fas fa-user text-3xl text-white"></i>
                </div>
              </div>
              <!-- Star Ratings -->
              <div class="flex justify-center mb-4">
                <span class="text-yellow-400">★★★★★</span>
              </div>
              <!-- Feedback -->
              <p class="text-gray-700 mb-4">
                "I absolutely love the quality of the clothes! The fit is perfect, and the fabric feels amazing. Highly recommend Clothify!"
              </p>
              <!-- Customer Name -->
              <p class="text-sm font-semibold text-[#2e716b]">- Sarah T.</p>
            </div>
          </div>

          <!-- Review Card 2 -->
          <div class="swiper-slide">
            <div class="bg-white rounded-lg shadow-lg p-6 text-center transform hover:scale-105 transition-transform duration-300">
              <div class="flex justify-center mb-4">
                <div class="w-16 h-16 rounded-full bg-[#2e716b] flex items-center justify-center">
                  <i class="fas fa-user text-3xl text-white"></i>
                </div>
              </div>
              <div class="flex justify-center mb-4">
                <span class="text-yellow-400">★★★★☆</span>
              </div>
              <p class="text-gray-700 mb-4">
                "Great selection of trendy clothes! The delivery was fast, and the customer service was very helpful."
              </p>
              <p class="text-sm font-semibold text-[#2e716b]">- John D.</p>
            </div>
          </div>

          <!-- Review Card 3 -->
          <div class="swiper-slide">
            <div class="bg-white rounded-lg shadow-lg p-6 text-center transform hover:scale-105 transition-transform duration-300">
              <div class="flex justify-center mb-4">
                <div class="w-16 h-16 rounded-full bg-[#2e716b] flex items-center justify-center">
                  <i class="fas fa-user text-3xl text-white"></i>
                </div>
              </div>
              <div class="flex justify-center mb-4">
                <span class="text-yellow-400">★★★★★</span>
              </div>
              <p class="text-gray-700 mb-4">
                "Clothify has become my favorite online store. The clothes are stylish, affordable, and super comfortable!"
              </p>
              <p class="text-sm font-semibold text-[#2e716b]">- Emily R.</p>
            </div>
          </div>

          <!-- Review Card 4 -->
          <div class="swiper-slide">
            <div class="bg-white rounded-lg shadow-lg p-6 text-center transform hover:scale-105 transition-transform duration-300">
              <div class="flex justify-center mb-4">
                <div class="w-16 h-16 rounded-full bg-[#2e716b] flex items-center justify-center">
                  <i class="fas fa-user text-3xl text-white"></i>
                </div>
              </div>
              <div class="flex justify-center mb-4">
                <span class="text-yellow-400">★★★★☆</span>
              </div>
              <p class="text-gray-700 mb-4">
                "I’m impressed with the quality and variety of clothes. The prices are reasonable, and the shipping was quick."
              </p>
              <p class="text-sm font-semibold text-[#2e716b]">- Michael S.</p>
            </div>
          </div>
        </div>

        <!-- Swiper Pagination -->
        <div class="swiper-pagination"></div>

        <!-- Swiper Navigation Buttons -->
        <div class="swiper-button-next text-white"></div>
        <div class="swiper-button-prev text-white"></div>
      </div>
    </div>
  </section>

  <!-- Swiper.js Script -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script>
    // Initialize Swiper
    const swiper = new Swiper('.swiper-container', {
      loop: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      breakpoints: {
        640: {
          slidesPerView: 1,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 30,
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 40,
        },
      },
    });
  </script>
</body>
</html>