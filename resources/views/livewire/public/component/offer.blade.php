<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Special Offers</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
  <!-- Special Offers Section -->
  <section class="py-16 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
      <!-- Banner -->
      <div class="bg-[#2e716b] rounded-lg shadow-lg overflow-hidden">
        <div class="grid grid-cols-1 lg:grid-cols-2">
          <!-- Banner Content -->
          <div class="p-8 lg:p-12 text-white">
            <h2 class="text-3xl sm:text-4xl font-bold mb-4">Flash Sale!</h2>
            <p class="text-lg mb-6">
              Don’t miss out on our exclusive seasonal offers. Grab your favorite styles at unbeatable prices before time runs out!
            </p>
            <!-- Pricing Details -->
            <div class="flex items-center mb-6">
              <span class="text-4xl font-bold">Up to 50% OFF</span>
              <span class="ml-4 text-xl line-through opacity-75">₹100</span>
              <span class="ml-4 text-xl font-bold">Now ₹50</span>
            </div>
            <!-- Countdown Timer -->
            <div class="flex space-x-4">
              <div class="text-center">
                <span id="days" class="text-3xl font-bold">00</span>
                <span class="block text-sm">Days</span>
              </div>
              <div class="text-center">
                <span id="hours" class="text-3xl font-bold">00</span>
                <span class="block text-sm">Hours</span>
              </div>
              <div class="text-center">
                <span id="minutes" class="text-3xl font-bold">00</span>
                <span class="block text-sm">Minutes</span>
              </div>
              <div class="text-center">
                <span id="seconds" class="text-3xl font-bold">00</span>
                <span class="block text-sm">Seconds</span>
              </div>
            </div>
            <!-- Call-to-Action Button -->
            <a
              href="#"
              class="inline-block mt-8 bg-white text-[#2e716b] font-semibold px-8 py-3 rounded-lg hover:bg-gray-100 transition-colors duration-300"
            >
              Shop Now
            </a>
          </div>
          <!-- Banner Image -->
          <div class="hidden lg:block">
            <img
              src="sale.avif"
              alt="Special Offer"
              class="w-full h-full object-cover"
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