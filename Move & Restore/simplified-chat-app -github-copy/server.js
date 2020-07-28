const io = require('socket.io')(3000)

const users = {}

// function will be called whenever user opens our website
// will give the user their own socket
io.on('connection', socket => {
    socket.on('new-user', name =>{
        users[socket.id] = name
        socket.broadcast.emit('user-connected', name)
    })
    // set up handling
    // get data aka message
    socket.on('send-chat-message', message =>{
        console.log(message)
        
        // send message to every other person on server (not the person who sends it)
        socket.broadcast.emit('chat-message', {message: message, name:
        users[socket.id] })
    
    })
    socket.on('disconnect', () =>{
        socket.broadcast.emit('user-disconnected', users[socket.id])
        delete users[socket.id]
    })
})
