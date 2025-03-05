<div x-data="chatbot()">
    <!-- Chat Toggle Button -->
    <button @click="openChat = !openChat"
        class="fixed bottom-6 right-6 bg-[#7db0ad] text-white p-4 rounded-full shadow-lg hover:bg-[#5a8d8a] transition-transform transform hover:scale-110">
        💬
    </button>

    <!-- Chat Box -->
    <div x-show="openChat" @click.away="openChat = false"
        class="fixed bottom-16 right-6 bg-white w-80 h-[400px] shadow-lg rounded-lg p-4 border border-gray-200 flex flex-col">
        <!-- Chat Header -->
        <div class="flex justify-between items-center border-b pb-2">
            <h2 class="text-lg font-semibold text-gray-700">Chat Support</h2>
            <button @click="openChat = false" class="text-gray-500 hover:text-red-500 transition-colors">✖</button>
        </div>

        <!-- Chat Messages -->
        <div class="flex-1 overflow-y-auto p-2 text-gray-700 space-y-2" x-ref="messages">
            <template x-for="message in messages" :key="message.id">
                <div :class="{'text-right': message.sender === 'user', 'text-left': message.sender === 'bot'}"
                    class="flex flex-col">
                    <div :class="{'bg-[#7db0ad] text-white': message.sender === 'user', 'bg-gray-100': message.sender === 'bot'}"
                        class="rounded-lg p-2 max-w-[70%] inline-block">
                        <span x-text="message.text"></span>
                    </div>
                </div>
            </template>
        </div>

        <!-- Chat Input -->
        <div class="flex gap-2 mt-2 items-center">
            <input x-model="userInput" type="text" placeholder="Type a message..."
                class="w-full p-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-[#7db0ad] transition-all"
                @keydown.enter.prevent="sendMessage">
            <!-- Send Icon -->
            <button @click="sendMessage"
                class="bg-[#7db0ad] text-white p-2 rounded-md hover:bg-[#5a8d8a] transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                </svg>
            </button>
        </div>
    </div>
</div>

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('chatbot', () => ({
            openChat: false,
            userInput: '',
            messages: [
                { id: 1, sender: 'bot', text: 'Welcome! How can we assist you today?' }
            ],

            sendMessage() {
                if (this.userInput.trim() === '') return;

                // Add user message
                this.messages.push({
                    id: this.messages.length + 1,
                    sender: 'user',
                    text: this.userInput
                });

                // Simulate bot response
                setTimeout(() => {
                    this.messages.push({
                        id: this.messages.length + 1,
                        sender: 'bot',
                        text: this.getBotResponse(this.userInput)
                    });

                    // Scroll to the bottom of the chat
                    this.$refs.messages.scrollTop = this.$refs.messages.scrollHeight;
                }, 500);

                // Clear input
                this.userInput = '';
            },

            getBotResponse(userMessage) {
                // Simple bot logic
                if (userMessage.toLowerCase().includes('hello')) {
                    return 'Hello! How can I help you?';
                } else if (userMessage.toLowerCase().includes('help')) {
                    return 'Sure! What do you need help with?';
                } else {
                    return 'I’m sorry, I didn’t understand that. Can you please clarify?';
                }
            }
        }));
    });
</script>