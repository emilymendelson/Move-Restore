const socket = io('http://localhost:3000')
const messageContainer = document.getElementById('message-container')
const messageForm = document.getElementById('send-container')
const messageInput = document.getElementById('message-input')

const name = prompt('What is your name?')
appendMessage('You joined')
socket.emit('new-user', name)

socket.on('chat-message', data => {
   appendMessage(`${data.name}: ${data.message}`)
})

socket.on('user-disconnected', name => {
    appendMessage(`${name} disconnected`)
 })

 socket.on('user-connected', name => {
    appendMessage(`${name} connected`)
 })


messageForm.addEventListener('submit', e => {
    // stops page from refreshing when sending message
    e.preventDefault()

    // get our message and send value to server
    const message = messageInput.value

    appendMessage(`You: ${message}`)

    // emit will send information from client to server
    socket.emit('send-chat-message', message)
    // equal to blank string so it empties out message every time we send it
    messageInput.value = ''
})

// appending messages to index file
function appendMessage(message) {
    const messageElement = document.createElement('div')
    messageElement.innerText = message
    messageContainer.append(messageElement)
}
