var sendSocketMessage = null;
$(document).ready(function() {
    const socket = new WebSocket('ws://localhost:10725');
    socket.addEventListener('message', function (event) {
        console.log('Message from server:', event.data);
        const message = JSON.parse(event.data);
        switch (message.type) {
            case 'newMessage':
                if ($("#selectedChatUserID").val() == message.data.from_user)
                    addNewMessageElement(message.data);
        }
    })
    socket.addEventListener('open', function (event) {
        socket.send(JSON.stringify({type: 'init', userId}));
    })
    sendSocketMessage = function(message) {
        socket.send(JSON.stringify(message));
    }
})