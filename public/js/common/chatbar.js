var addNewMessageElement = function (message) {
    let html = '';
    if (message.from_user == userId) {
        html = `<div class="d-flex chat-messages">
            <div class="flex-grow-1 chat-menu-reply">
                <div class="">
                    <p class="chat-cont">${message.message}</p>
                </div>
                <p class="chat-time">${message.created_at}</p>
            </div>
        </div>`;
    } else {
        html = `<div class="d-flex chat-messages">
            <a class="media-left photo-table" href="#!">
                <div class="flex-shrink-0">
                    <img class="media-object img-radius img-radius m-t-5" src="/assets/images/avatar-${userId == 1 ? 2 : 1}.jpg" alt="Generic placeholder image">
                </div>
            </a>
            <div class="flex-grow-1 chat-menu-content">
                <div class="">
                    <p class="chat-cont">${message.message}</p>
                </div>
                <p class="chat-time">${message.created_at}</p>
            </div>
        </div>`;
    }
    const mainFriendChat = $('.main-friend-chat');
    mainFriendChat.append(html);
    mainFriendChat.slimscroll();
    setTimeout(() => mainFriendChat.slimscroll({ scrollTo: 10000000000 }), 100);
}
var chatUsers = [];
var unreadData = {
    totalUnread: 0,
    unreads: []
}
function currentChatUser() {
    if ($('.showChat_inner').css('display') == 'block') {
        return $('#selectedChatUserID').val();
    }
    return null;
}
function getChatUnreadCounts() {
    axios.post('/chat/getUnreadCounts').then(({ data: response }) => {
        console.log(response);
        if (response.status != 0) throw 'error';
        unreadData = response.data;
        updateUnread();
    }).catch(err => {
        console.error(err);
    })
}

function updateUnread() {
    console.log(unreadData);
    const badge = $('.displayChatbox .badge');
    badge.html(unreadData.totalUnread);
    console.log(badge);
    if (Number(unreadData.totalUnread)) {
        badge.removeClass('d-none');
    } else {
        badge.addClass('d-none');
    }

    $('.userlist-box .badge').addClass('d-none');
    unreadData.unreads.forEach(item => {
        const userItemBox = $(`.userlist-box[data-id="${item.from_user}"] .badge`);
        userItemBox.html(item.unreadCount);
        if (Number(item.unreadCount)) {
            userItemBox.removeClass('d-none');
        } else {
            userItemBox.addClass('d-none');
        }
    })
}

function updateUserStatus(userId, connectedStatus = false) {
    const statusElement = $(`.userlist-box[data-id="${userId}"] .live-status`);
    if (connectedStatus) {
        statusElement.removeClass('bg-warning');
        statusElement.addClass('bg-success');
    } else {
        statusElement.addClass('bg-warning');
        statusElement.removeClass('bg-success');
    }
}

function getUsersStatus() {
    const chatUserIds = [];
    chatUsers.forEach(user => chatUserIds.push(user.id));
    sendSocketMessage({ type: 'checkUsersStatus', data: chatUserIds });
}

function setChatRead(from) {
    axios.post('/chat/setRead', { from }).then(() => {

    }).catch(err => {

    });
}
$(document).ready(function () {
    getChatUnreadCounts();
    /*chatbar js start*/
    /*chat box scroll*/
    var a = $(window).height() - 80;
    $(".main-friend-list").slimScroll({
        height: a,
        allowPageScroll: false,
        wheelStep: 5
    });
    var a = $(window).height() - 155;
    $(".main-friend-chat").slimScroll({
        height: a,
        allowPageScroll: false,
        wheelStep: 5
    });

    // search
    $("#search-friends").on("keyup", function () {
        var g = $(this).val().toLowerCase();
        $(".userlist-box .media-body .chat-header").each(function () {
            var s = $(this).text().toLowerCase();
            $(this).closest('.userlist-box')[s.indexOf(g) !== -1 ? 'show' : 'hide']();
        });
    });

    // open chat box
    $('.displayChatbox').on('click', function () {
        axios.post('/chat').then(({ data: response }) => {
            if (response.status != 0) throw ('error');

            const mainFriendList = $(".main-friend-list");

            let html = '';
            chatUsers = response.users;
            getUsersStatus();
            response.users.forEach(user => {
                html += `<div class="media userlist-box waves-effect waves-light" data-id="${user.id}" data-status="online" data-username="${user.name}">
                <span class="badge bg-c-green">0</span>
                    <div class="media-left" href="#!">
                        <img class="media-object img-radius img-radius" src="/upload/avatar/${user.id}" alt="Generic placeholder image ">
                        <div class="live-status bg-warning"></div>
                    </div>
                    <div class="media-body">
                        <div class="chat-header">${user.name}</div>
                    </div>
                </div>`
            })
            mainFriendList.html(html);
            updateUnread();

            var my_val = $('.pcoded').attr('vertical-placement');
            if (my_val == 'right') {
                var options = {
                    direction: 'left'
                };
            } else {
                var options = {
                    direction: 'right'
                };
            }
            $('.showChat').toggle('slide', options, 500);

            //open friend chat
            $('.userlist-box').click(function () {
                console.log($(this));
                const user_id = $(this).attr('data-id');
                $("#selectedChatUserID").val(user_id);
                axios.get('/chat/message', { params: { user_id } }).then(({ data: response }) => {
                    if (response.status != 0) throw ('error');
                    getChatUnreadCounts();
                    let html = '';

                    response.messages.forEach(message => {
                        if (message.from_user == user_id) {
                            html += `<div class="d-flex chat-messages">
                                <a class="media-left photo-table" href="#!">
                                    <div class="flex-shrink-0">
                                        <img class="media-object img-radius img-radius m-t-5" src="/assets/images/avatar-${userId == 1 ? 2 : 1}.jpg" alt="Generic placeholder image">
                                    </div>
                                </a>
                                <div class="flex-grow-1 chat-menu-content">
                                    <div class="">
                                        <p class="chat-cont">${message.message}</p>
                                    </div>
                                    <p class="chat-time">${message.created_at}</p>
                                </div>
                            </div>`;
                        } else {
                            html += `<div class="d-flex chat-messages">
                                <div class="flex-grow-1 chat-menu-reply">
                                    <div class="">
                                        <p class="chat-cont">${message.message}</p>
                                    </div>
                                    <p class="chat-time">${message.created_at}</p>
                                </div>
                            </div>`;
                        }
                    });

                    const mainFriendChat = $('.main-friend-chat');
                    mainFriendChat.html(html);
                    mainFriendChat.slimscroll();
                    setTimeout(() => mainFriendChat.slimScroll({ scrollTo: '100000000000px' }), 100);

                    $('#message-box-title').html(response.chatUser.name)

                    var my_val = $('.pcoded').attr('vertical-placement');
                    if (my_val == 'right') {
                        var options = {
                            direction: 'left'
                        };
                    } else {
                        var options = {
                            direction: 'right'
                        };
                    }
                    $('.showChat_inner').toggle('slide', options, 500);
                }).catch(err => {
                    console.error(err);
                });
            });

        }).catch(err => {
            console.error(err);
        })
    });
    //back to main chatbar
    $('.back_chatBox').on('click', function () {
        var my_val = $('.pcoded').attr('vertical-placement');
        if (my_val == 'right') {
            var options = {
                direction: 'left'
            };
        } else {
            var options = {
                direction: 'right'
            };
        }
        $('.showChat_inner').toggle('slide', options, 500);
        $('.showChat').css('display', 'block');
    });
    $('.back_friendlist').on('click', function () {
        var my_val = $('.pcoded').attr('vertical-placement');
        if (my_val == 'right') {
            var options = {
                direction: 'left'
            };
        } else {
            var options = {
                direction: 'right'
            };
        }
        $('.p-chat-user').toggle('slide', options, 500);
        $('.showChat').css('display', 'block');
    });
    $("#chatDraft").keypress(function (e) {
        var key = e.which;
        if (key == 13) {
            $('#chatSendButton').click();
        }
    });
    $('#chatSendButton').click(function () {
        let message = $("#chatDraft").val();
        if (!message.length) return;
        let bodyFormData = new FormData();
        bodyFormData.append('receiver_id', $("#selectedChatUserID").val());
        bodyFormData.append('message', message);
        // bodyFormData.append('file')
        axios.post('/chat/message/new', bodyFormData, {
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        }).then(({ data: response }) => {
            const { message, status } = response;
            if (status != 0) throw ('error');
            $("#chatDraft").val("")
            sendSocketMessage({ type: 'newMessage', data: { message, from: user } });
            addNewMessageElement(message);
        }).catch(err => {
            console.error(err);
        })
    });
    // /*chatbar js end*/
})