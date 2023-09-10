// المان کانست خارج از توایع تعریف شود

const messageInput = document.getElementById('message-input');
const chatMessages = document.getElementById('chat-messages');
const messageText = messageInput.value;

function sendMessage() {
    
    if (messageText != '') {
        
        let messageElement = document.createElement('div');
        messageElement.className = 'message';
        messageElement.textContent = messageText;

        chatMessages.appendChild(messageElement);

        // Clear the input field
        messageInput.value = '';

        // Scroll to the bottom of the chat
        chatMessages.scrollTop = chatMessages.scrollHeight;
    }
}
