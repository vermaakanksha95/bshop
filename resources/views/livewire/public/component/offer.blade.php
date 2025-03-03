<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Special Offers</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Animate.css for Animations -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>
<body class="bg-gray-100">
  <!-- Special Offers Section -->
  <section class="py-16 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
      <!-- Banner -->
      <div class="bg-gradient-to-r from-[#2e716b] to-[#3a8a82] rounded-lg shadow-2xl overflow-hidden transform hover:scale-105 transition-transform duration-500">
        <div class="grid grid-cols-1 lg:grid-cols-2">
          <!-- Banner Content -->
          <div class="p-8 lg:p-12 text-[#2e716b]  ">
            <h2 class="text-4xl sm:text-5xl font-bold mb-6 animate__animated animate__fadeInDown">Flash Sale!</h2>
            <p class="text-lg mb-6 animate__animated animate__fadeIn animate__delay-1s">
              Don’t miss out on our exclusive seasonal offers. Grab your favorite styles at unbeatable prices before time runs out!
            </p>
            <!-- Pricing Details -->
            <div class="flex items-center mb-6 animate__animated animate__fadeIn animate__delay-2s">
              <span class="text-5xl font-bold">Up to 50% OFF</span>
              <span class="ml-4 text-2xl line-through opacity-75">₹100</span>
              <span class="ml-4 text-2xl font-bold">Now ₹50</span>
            </div>
            <!-- Countdown Timer -->
            <div class="flex space-x-4 mb-8 animate__animated animate__fadeIn animate__delay-3s">
              <div class="text-center bg-white bg-opacity-20 rounded-lg p-4">
                <span id="days" class="text-4xl font-bold">00</span>
                <span class="block text-sm">Days</span>
              </div>
              <div class="text-center bg-white bg-opacity-20 rounded-lg p-4">
                <span id="hours" class="text-4xl font-bold">00</span>
                <span class="block text-sm">Hours</span>
              </div>
              <div class="text-center bg-white bg-opacity-20 rounded-lg p-4">
                <span id="minutes" class="text-4xl font-bold">00</span>
                <span class="block text-sm">Minutes</span>
              </div>
              <div class="text-center bg-white bg-opacity-20 rounded-lg p-4">
                <span id="seconds" class="text-4xl font-bold">00</span>
                <span class="block text-sm">Seconds</span>
              </div>
            </div>
            <!-- Call-to-Action Button -->
            <a
              href="#"
              class="inline-block mt-8 bg-white text-[#2e716b] font-semibold px-8 py-3 rounded-lg hover:bg-gray-100 transition-colors duration-300 animate__animated animate__fadeInUp animate__delay-4s"
            >
              Shop Now
            </a>
          </div>
          <!-- Banner Image -->
          <div class="hidden lg:block">
            <img
              src="sell.jpeg"
              alt="Special Offer"
              class="w-full h-full object-cover transform hover:scale-110 transition-transform duration-500"
            />
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Countdown Timer Script -->
  <script>
    // Set the date we're counting down to
    const countDownDate = new Date("Jan 1, 2024 00:00:00").getTime();

    // Update the countdown every 1 second
    const countdown = setInterval(() => {
      // Get today's date and time
      const now = new Date().getTime();

      // Calculate the remaining time
      const distance = countDownDate - now;

      // Calculate days, hours, minutes, and seconds
      const days = Math.floor(distance / (1000 * 60 * 60 * 24));
      const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      const seconds = Math.floor((distance % (1000 * 60)) / 1000);

      // Display the result
      document.getElementById("days").innerText = days;
      document.getElementById("hours").innerText = hours;
      document.getElementById("minutes").innerText = minutes;
      document.getElementById("seconds").innerText = seconds;

      // If the countdown is over, display a message
      if (distance < 0) {
        clearInterval(countdown);
        document.getElementById("countdown").innerHTML = "EXPIRED";
      }
    }, 1000);
  </script>
</body>
</html>