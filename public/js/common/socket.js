var sendSocketMessage = null;
$(document).ready(function() {
    const socket = new WebSocket('ws://localhost:10725');
    socket.addEventListener('message', function (event) {
        // console.log('Message from server:', event.data);
        const message = JSON.parse(event.data);
        switch (message.type) {
            case 'newMessage':
                notify({title: ` <b>${message.data.from.name} sent you a message</b><br>`, message: message.data.message.message, icon:'fa fa-comments', type: 'primary'});
                if (currentChatUser() == message.data.message.from_user) {
                    addNewMessageElement(message.data.message);
                    setChatRead(currentChatUser());
                } else {
                    getChatUnreadCounts();
                }
                break;
            case 'connectionStatus':
                Object.keys(message.data).forEach(userId => {
                    const connectedStatus = message.data[userId];
                    updateUserStatus(userId, connectedStatus);
                })
                break;
            case 'userConnected':
                updateUserStatus(message.data.id, true);
                break;
            case 'userDisconnected':
                updateUserStatus(message.data.id, false);
                break;
        }
    })
    socket.addEventListener('open', function (event) {
        socket.send(JSON.stringify({type: 'init', userId}));
    })
    sendSocketMessage = function(message) {
        socket.send(JSON.stringify(message));
    }
})