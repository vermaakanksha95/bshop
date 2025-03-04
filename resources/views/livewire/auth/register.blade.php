<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Page</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Google Fonts for Stylish Typography -->
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600&family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Roboto', sans-serif;
    }
    .heading-font {
      font-family: 'Playfair Display', serif;
    }
  </style>
</head>
<body class="bg-[#f9f9f9]">
  <!-- Registration Section -->
  <section class="min-h-screen flex items-center justify-center p-6  w-full">
    <div class=" w-full bg-white rounded-xl shadow-lg overflow-hidden flex flex-col lg:flex-row">
      <!-- Left Side: Branding and Image -->
      <div class="lg:w-1/2 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1523381294911-8d3cead13475?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80');">
        <div class="bg-black bg-opacity-50 h-full p-8 flex flex-col justify-center">
          <h1 class="text-5xl font-bold text-white heading-font mb-4">Welcome to BiharShop</h1>
          <p class="text-lg text-gray-200">Join our fashion community and explore the latest trends.</p>
        </div>
      </div>

      <!-- Right Side: Registration Form -->
      <div class="lg:w-1/2 p-8">
        <h2 class="text-3xl font-bold text-[#2e716b] heading-font mb-6">Create Your Account</h2>
        <form class="space-y-6">
          <!-- Full Name -->
          <div>
            <label for="fullName" class="block text-sm font-medium text-gray-700">Full Name</label>
            <input
              type="text"
              id="fullName"
              name="fullName"
              placeholder="Enter your full name"
              class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#2e716b] focus:border-transparent"
              required
            />
          </div>

          <!-- Email -->
          <div>
            <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
            <input
              type="email"
              id="email"
              name="email"
              placeholder="Enter your email"
              class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#2e716b] focus:border-transparent"
              required
            />
          </div>

          <!-- Password -->
          <div>
            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
            <input
              type="password"
              id="password"
              name="password"
              placeholder="Enter your password"
              class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#2e716b] focus:border-transparent"
              required
            />
          </div>

          <!-- Confirm Password -->
          <div>
            <label for="confirmPassword" class="block text-sm font-medium text-gray-700">Confirm Password</label>
            <input
              type="password"
              id="confirmPassword"
              name="confirmPassword"
              placeholder="Confirm your password"
              class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#2e716b] focus:border-transparent"
              required
            />
          </div>

          <!-- Terms and Conditions -->
          <div class="flex items-center">
            <input
              type="checkbox"
              id="terms"
              name="terms"
              class="w-4 h-4 text-[#2e716b] border-gray-300 rounded focus:ring-[#2e716b]"
              required
            />
            <label for="terms" class="ml-2 text-sm text-gray-600">
              I agree to the <a href="#" class="text-[#2e716b] hover:underline">terms and conditions</a>.
            </label>
          </div>

          <!-- Submit Button -->
          <button
            type="submit"
            class="w-full bg-[#2e716b] text-white px-6 py-3 rounded-lg hover:bg-[#3a8a82] transition-colors duration-300"
          >
            Sign Up
          </button>

          <!-- Login Link -->
          <p class="text-sm text-gray-600 text-center">
            Already have an account? <a href="#" class="text-[#2e716b] hover:underline">Log in here</a>.
          </p>
        </form>
      </div>
    </div>
  </section>
</body>
</html>