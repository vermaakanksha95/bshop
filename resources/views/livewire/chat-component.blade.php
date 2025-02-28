<div x-data="{ openChat: false }">
    <button @click="openChat = !openChat"
        class="fixed bottom-6 right-6 bg-[#7db0ad] text-white p-4 rounded-full shadow-lg hover:bg-[#5a8d8a]">
        💬
    </button>

    <!-- Chat Box -->
    <form wire:submit.prevent="sendMessage">
        <div x-show="openChat" @click.away="openChat = false"
        class="fixed bottom-16 right-6 bg-white w-80  h-[400px] shadow-lg rounded-lg p-4 border border-gray-200">
        <div class="flex justify-between items-center border-b pb-2">
            <h2 class="text-lg font-semibold text-gray-700">Chat Support</h2>
            <button @click="openChat = false" class="text-gray-500 hover:text-red-500">✖</button>
        </div>
        <div class=" h-60 overflow-y-auto p-2 text-gray-700">
            
            <p>Welcome! How can we assist you today?</p>
            <!-- You can dynamically add messages here -->
        </div>
        <textarea wire:model="message" rows="3" placeholder="Type a message..."
            class="w-full p-2 border rounded-md mt-2 focus:outline-none focus:ring-2 focus:ring-[#7db0ad]">
        </textarea>
    </div>
    </form>

</div>
