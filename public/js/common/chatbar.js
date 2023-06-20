$(document).ready(function () {
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
            response.users.forEach(user => {
                html += `<div class="media userlist-box waves-effect waves-light" data-id="${user.id}" data-status="online" data-username="${user.name}">
                <a class="media-left" href="#!">
                    <img class="media-object img-radius img-radius" src="/assets/images/avatar-3.jpg" alt="Generic placeholder image ">
                    <div class="live-status bg-success"></div>
                </a>
                <div class="media-body">
                    <div class="chat-header">${user.name}</div>
                </div>
            </div>`
            })

            mainFriendList.html(html);

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
                axios.get('/chat/message', { params: { user_id } }).then(({ data: response }) => {
                    if (response.status != 0) throw ('error');
                    let html = '';

                    response.messages.forEach(message => {
                        if (message.from_user == user_id) {
                            html += `<div class="d-flex chat-messages">
                                <a class="media-left photo-table" href="#!">
                                    <div class="flex-shrink-0">
                                        <img class="media-object img-radius img-radius m-t-5" src="/assets/images/avatar-2.jpg" alt="Generic placeholder image">
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
                    setTimeout(() => mainFriendChat.slimScroll({ scrollTo: '10000px' }), 100);

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
    // /*chatbar js end*/
})