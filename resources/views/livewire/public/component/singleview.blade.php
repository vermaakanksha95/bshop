<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product View</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
  <!-- Product View Section -->
  <section class="py-16 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
      <!-- Product Grid -->
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
        <!-- Product Image -->
        <div class="bg-white rounded-lg shadow-lg p-6">
          <img
            src="https://images.unsplash.com/photo-1586790170083-2f9ceadc732d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80"
            alt="Product Image"
            class="w-full h-auto rounded-lg"
          />
        </div>

        <!-- Product Details -->
        <div class="bg-white rounded-lg shadow-lg p-6">
          <!-- Product Name -->
          <h1 class="text-3xl font-bold text-[#2e716b] mb-4">Men's Casual Shirt</h1>
          <!-- Product Price -->
          <p class="text-2xl font-bold text-[#2e716b] mb-6">₹2900.00</p>

          <!-- Color Selection -->
          <div class="mb-6">
            <h3 class="text-lg font-semibold text-gray-800 mb-2">Select Color</h3>
            <div class="flex space-x-4">
              <button class="w-8 h-8 rounded-full bg-blue-500 border-2 border-gray-300 hover:border-[#2e716b]"></button>
              <button class="w-8 h-8 rounded-full bg-red-500 border-2 border-gray-300 hover:border-[#2e716b]"></button>
              <button class="w-8 h-8 rounded-full bg-green-500 border-2 border-gray-300 hover:border-[#2e716b]"></button>
              <button class="w-8 h-8 rounded-full bg-gray-500 border-2 border-gray-300 hover:border-[#2e716b]"></button>
            </div>
          </div>

          <!-- Size Selection -->
          <div class="mb-6">
            <h3 class="text-lg font-semibold text-gray-800 mb-2">Select Size</h3>
            <div class="flex space-x-4">
              <button class="px-4 py-2 border-2 border-gray-300 rounded-lg hover:border-[#2e716b]">S</button>
              <button class="px-4 py-2 border-2 border-gray-300 rounded-lg hover:border-[#2e716b]">M</button>
              <button class="px-4 py-2 border-2 border-gray-300 rounded-lg hover:border-[#2e716b]">L</button>
              <button class="px-4 py-2 border-2 border-gray-300 rounded-lg hover:border-[#2e716b]">XL</button>
            </div>
          </div>

          <!-- Quantity Selection -->
          <div class="mb-6">
            <h3 class="text-lg font-semibold text-gray-800 mb-2">Quantity</h3>
            <div class="flex items-center">
              <button class="px-4 py-2 bg-gray-200 rounded-l-lg hover:bg-gray-300">-</button>
              <input
                type="number"
                value="1"
                min="1"
                class="w-16 text-center border-t-2 border-b-2 border-gray-200"
              />
              <button class="px-4 py-2 bg-gray-200 rounded-r-lg hover:bg-gray-300">+</button>
            </div>
          </div>

          <!-- Add to Cart Button -->
          <button class="w-full bg-[#2e716b] text-white px-8 py-3 rounded-lg hover:bg-[#3a8a82] transition-colors duration-300">
            Add to Cart
          </button>

          <!-- Product Description -->
          <div class="mt-6">
            <h3 class="text-lg font-semibold text-gray-800 mb-2">Product Description</h3>
            <p class="text-gray-700">
              This stylish men's casual shirt is perfect for any occasion. Made from high-quality fabric, it offers a comfortable fit and a modern look. Available in multiple colors and sizes.
            </p>
          </div>
        </div>
      </div>

      <!-- Related Products Section -->
      <div class="mt-16">
        <h2 class="text-3xl font-bold text-[#2e716b] mb-8">Related Products</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
          <!-- Related Product 1 -->
          <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-all duration-300 transform hover:-translate-y-2">
            <img
              src="https://images.unsplash.com/photo-1594633312681-425c7b97ccd1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80"
              alt="Related Product 1"
              class="w-full h-48 object-cover"
            />
            <div class="p-4">
              <h3 class="text-lg font-semibold text-gray-800 mb-2">Women's Summer Dress</h3>
              <p class="text-[#2e716b] font-bold text-xl">₹4900.00</p>
            </div>
          </div>

          <!-- Related Product 2 -->
          <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-all duration-300 transform hover:-translate-y-2">
            <img
              src="https://images.unsplash.com/photo-1620799140408-edc6dcb6d633?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1972&q=80"
              alt="Related Product 2"
              class="w-full h-48 object-cover"
            />
            <div class="p-4">
              <h3 class="text-lg font-semibold text-gray-800 mb-2">Unisex Hoodie</h3>
              <p class="text-[#2e716b] font-bold text-xl">₹3900.00</p>
            </div>
          </div>

          <!-- Related Product 3 -->
          <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-all duration-300 transform hover:-translate-y-2">
            <img
              src="https://images.unsplash.com/photo-1581655353564-df123a1eb820?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80"
              alt="Related Product 3"
              class="w-full h-48 object-cover"
            />
            <div class="p-4">
              <h3 class="text-lg font-semibold text-gray-800 mb-2">Women's Denim Jacket</h3>
              <p class="text-[#2e716b] font-bold text-xl">₹5900.00</p>
            </div>
          </div>

          <!-- Related Product 4 -->
          <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-all duration-300 transform hover:-translate-y-2">
            <img
              src="https://images.unsplash.com/photo-1595950653106-6c9ebd614d3a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80"
              alt="Related Product 4"
              class="w-full h-48 object-cover"
            />
            <div class="p-4">
              <h3 class="text-lg font-semibold text-gray-800 mb-2">Activewear</h3>
              <p class="text-[#2e716b] font-bold text-xl">₹3500.00</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>