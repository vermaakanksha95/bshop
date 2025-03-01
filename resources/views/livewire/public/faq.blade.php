<div>
    <!-- Hero Section -->
    <div class="relative overflow-hidden mt-28 md:min-h-[50vh]">
        <img src="faq-hero.jpg" alt="FAQ" class="object-cover w-full h-full" />
        <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
            <h1 class="text-4xl md:text-6xl font-bold text-white">FAQs</h1>
        </div>
    </div>

    <!-- FAQ Section -->
    <div class="max-w-7xl mx-auto py-16 px-4">
        <h2 class="text-3xl font-bold text-[#7db0ad] mb-8 text-center">Frequently Asked Questions</h2>
        <div class="space-y-6">
            <!-- FAQ Item 1 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <button class="w-full flex justify-between items-center p-6 focus:outline-none" onclick="toggleFAQ(1)">
                    <h3 class="text-xl font-semibold text-gray-800">How do I place an order?</h3>
                    <i id="icon-1" class="fas fa-chevron-down text-[#7db0ad]"></i>
                </button>
                <div id="answer-1" class="hidden px-6 pb-6">
                    <p class="text-gray-600">To place an order, simply browse our collection, select the items you like, and add them to your cart. Proceed to checkout, enter your shipping details, and complete the payment process.</p>
                </div>
            </div>

            <!-- FAQ Item 2 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <button class="w-full flex justify-between items-center p-6 focus:outline-none" onclick="toggleFAQ(2)">
                    <h3 class="text-xl font-semibold text-gray-800">What payment methods do you accept?</h3>
                    <i id="icon-2" class="fas fa-chevron-down text-[#7db0ad]"></i>
                </button>
                <div id="answer-2" class="hidden px-6 pb-6">
                    <p class="text-gray-600">We accept all major credit and debit cards, including Visa, MasterCard, and American Express. We also support payments through PayPal and Apple Pay.</p>
                </div>
            </div>

            <!-- FAQ Item 3 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <button class="w-full flex justify-between items-center p-6 focus:outline-none" onclick="toggleFAQ(3)">
                    <h3 class="text-xl font-semibold text-gray-800">How can I track my order?</h3>
                    <i id="icon-3" class="fas fa-chevron-down text-[#7db0ad]"></i>
                </button>
                <div id="answer-3" class="hidden px-6 pb-6">
                    <p class="text-gray-600">Once your order is shipped, you will receive a confirmation email with a tracking number. You can use this number to track your order on our website or the courier's website.</p>
                </div>
            </div>

            <!-- FAQ Item 4 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <button class="w-full flex justify-between items-center p-6 focus:outline-none" onclick="toggleFAQ(4)">
                    <h3 class="text-xl font-semibold text-gray-800">What is your return policy?</h3>
                    <i id="icon-4" class="fas fa-chevron-down text-[#7db0ad]"></i>
                </button>
                <div id="answer-4" class="hidden px-6 pb-6">
                    <p class="text-gray-600">We offer a 30-day return policy. If you're not satisfied with your purchase, you can return the item(s) in their original condition for a full refund or exchange.</p>
                </div>
            </div>

            <!-- FAQ Item 5 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <button class="w-full flex justify-between items-center p-6 focus:outline-none" onclick="toggleFAQ(5)">
                    <h3 class="text-xl font-semibold text-gray-800">Do you ship internationally?</h3>
                    <i id="icon-5" class="fas fa-chevron-down text-[#7db0ad]"></i>
                </button>
                <div id="answer-5" class="hidden px-6 pb-6">
                    <p class="text-gray-600">Yes, we ship internationally. Shipping costs and delivery times vary depending on your location. Please check our Shipping Policy for more details.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript for FAQ Toggle -->
<script>
    function toggleFAQ(id) {
        const answer = document.getElementById(`answer-${id}`);
        const icon = document.getElementById(`icon-${id}`);
        answer.classList.toggle('hidden');
        icon.classList.toggle('fa-chevron-down');
        icon.classList.toggle('fa-chevron-up');
    }
</script>