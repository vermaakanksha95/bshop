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
  <!-- Animate.css for Animations -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>
<body class="bg-gray-100">
  <!-- Customer Reviews Section -->
  <section class="py-16 px-4 sm:px-6 lg:px-8 bg-gradient-to-r from-[#2e716b] to-[#3a8a82]">
    <div class="max-w-7xl mx-auto">
      <!-- Section Title -->
      <h2 class="text-2xl text-[#2e716b] sm:text-5xl   text-center mb-8 animate__animated animate__fadeInDown">
        What Our Customers Say
      </h2>

      <!-- Swiper Container -->
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <!-- Review Card 1 -->
          <div class="swiper-slide">
            <div class="bg-white rounded-lg shadow-2xl p-8 text-center transform hover:scale-105 transition-transform duration-500 animate__animated animate__fadeInUp">
              <!-- User Icon -->
              <div class="flex justify-center mb-6">
                <div class="w-20 h-20 rounded-full bg-[#2e716b] flex items-center justify-center">
                  <i class="fas fa-user text-4xl text-white"></i>
                </div>
              </div>
              <!-- Star Ratings -->
              <div class="flex justify-center mb-6">
                <span class="text-yellow-400 text-2xl">★★★★★</span>
              </div>
              <!-- Feedback -->
              <p class="text-gray-700 mb-6 text-lg">
                "I absolutely love the quality of the clothes! Highly recommend BiharShop!"
              </p>
              <!-- Customer Name -->
              <p class="text-sm font-semibold text-[#2e716b]">- Sarah T.</p>
            </div>
          </div>

          <!-- Review Card 2 -->
          <div class="swiper-slide">
            <div class="bg-white rounded-lg shadow-2xl p-8 text-center transform hover:scale-105 transition-transform duration-500 animate__animated animate__fadeInUp animate__delay-1s">
              <div class="flex justify-center mb-6">
                <div class="w-20 h-20 rounded-full bg-[#2e716b] flex items-center justify-center">
                  <i class="fas fa-user text-4xl text-white"></i>
                </div>
              </div>
              <div class="flex justify-center mb-6">
                <span class="text-yellow-400 text-2xl">★★★★☆</span>
              </div>
              <p class="text-gray-700 mb-6 text-lg">
                "Great selection of trendy clothes! The delivery was fast, and the customer service was very helpful."
              </p>
              <p class="text-sm font-semibold text-[#2e716b]">- John D.</p>
            </div>
          </div>

          <!-- Review Card 3 -->
          <div class="swiper-slide">
            <div class="bg-white rounded-lg shadow-2xl p-8 text-center transform hover:scale-105 transition-transform duration-500 animate__animated animate__fadeInUp animate__delay-2s">
              <div class="flex justify-center mb-6">
                <div class="w-20 h-20 rounded-full bg-[#2e716b] flex items-center justify-center">
                  <i class="fas fa-user text-4xl text-white"></i>
                </div>
              </div>
              <div class="flex justify-center mb-6">
                <span class="text-yellow-400 text-2xl">★★★★★</span>
              </div>
              <p class="text-gray-700 mb-6 text-lg">
                "Clothify has become my favorite online store. The clothes are stylish, affordable, and super comfortable!"
              </p>
              <p class="text-sm font-semibold text-[#2e716b]">- Emily R.</p>
            </div>
          </div>

          <!-- Review Card 4 -->
          <div class="swiper-slide">
            <div class="bg-white rounded-lg shadow-2xl p-8 text-center transform hover:scale-105 transition-transform duration-500 animate__animated animate__fadeInUp animate__delay-3s">
              <div class="flex justify-center mb-6">
                <div class="w-20 h-20 rounded-full bg-[#2e716b] flex items-center justify-center">
                  <i class="fas fa-user text-4xl text-white"></i>
                </div>
              </div>
              <div class="flex justify-center mb-6">
                <span class="text-yellow-400 text-2xl">★★★★☆</span>
              </div>
              <p class="text-gray-700 mb-6 text-lg">
                "I’m impressed with the quality and variety of clothes. The prices are reasonable, and the shipping was quick."
              </p>
              <p class="text-sm font-semibold text-[#2e716b]">- Michael S.</p>
            </div>
          </div>
        </div>

        <!-- Swiper Pagination -->
        <div class="swiper-pagination"></div>

        <!-- Swiper Navigation Buttons -->
        <div class="swiper-button-next text-white hover:text-gray-200 transition-colors duration-300"></div>
        <div class="swiper-button-prev text-white hover:text-gray-200 transition-colors duration-300"></div>
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