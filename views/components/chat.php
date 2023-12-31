<?php if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] || 1) { ?>
    <!-- [ chat user list ] start -->
    <div id="sidebar" class="users p-chat-user showChat">
        <div class="had-container">
            <div class="p-fixed users-main">
                <div class="user-box">
                    <div class="chat-search-box">
                        <a class="back_friendlist">
                            <i class="feather icon-x"></i>
                        </a>
                        <div class="right-icon-control">
                            <div class="input-group input-group-button">
                                <input type="text" id="search-friends" name="footer-email" class="form-control" placeholder="Search Friend">
                                <button class="btn btn-primary waves-effect waves-light" type="button">
                                    <i class="feather icon-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="main-friend-list">
                        <div class="media userlist-box waves-effect waves-light" data-id="1" data-status="online" data-username="Josephin Doe">
                            <a class="media-left" href="#!">
                                <img class="media-object img-radius img-radius" src="/assets/images/avatar-3.jpg" alt="Generic placeholder image ">
                                <div class="live-status bg-success"></div>
                            </a>
                            <div class="media-body">
                                <div class="chat-header">Josephin Doe</div>
                            </div>
                        </div>
                        <div class="media userlist-box waves-effect waves-light" data-id="2" data-status="online" data-username="Lary Doe">
                            <a class="media-left" href="#!">
                                <img class="media-object img-radius" src="/assets/images/avatar-2.jpg" alt="Generic placeholder image">
                                <div class="live-status bg-success"></div>
                            </a>
                            <div class="media-body">
                                <div class="f-13 chat-header">Lary Doe</div>
                            </div>
                        </div>
                        <div class="media userlist-box waves-effect waves-light" data-id="3" data-status="online" data-username="Alice">
                            <a class="media-left" href="#!">
                                <img class="media-object img-radius" src="/assets/images/avatar-4.jpg" alt="Generic placeholder image">
                                <div class="live-status bg-success"></div>
                            </a>
                            <div class="media-body">
                                <div class="f-13 chat-header">Alice</div>
                            </div>
                        </div>
                        <div class="media userlist-box waves-effect waves-light" data-id="4" data-status="offline" data-username="Alia">
                            <a class="media-left" href="#!">
                                <img class="media-object img-radius" src="/assets/images/avatar-3.jpg" alt="Generic placeholder image">
                                <div class="live-status bg-default"></div>
                            </a>
                            <div class="media-body">
                                <div class="f-13 chat-header">Alia<small class="d-block text-muted">10 min ago</small></div>
                            </div>
                        </div>
                        <div class="media userlist-box waves-effect waves-light" data-id="5" data-status="offline" data-username="Suzen">
                            <a class="media-left" href="#!">
                                <img class="media-object img-radius" src="/assets/images/avatar-2.jpg" alt="Generic placeholder image">
                                <div class="live-status bg-default"></div>
                            </a>
                            <div class="media-body">
                                <div class="f-13 chat-header">Suzen<small class="d-block text-muted">15 min ago</small></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- [ chat user list ] end -->
    <!-- [ chat message ] start -->
    <div class="showChat_inner">
        <div class="d-flex chat-inner-header">
            <a class="back_chatBox">
                <i class="feather icon-x"></i> <span id="message-box-title">Josephin Doe</span>
            </a>
        </div>
        <div class="main-friend-chat">
            <div class="d-flex chat-messages">
                <a class="media-left photo-table" href="#!">
                    <div class="flex-shrink-0">
                        <img class="media-object img-radius img-radius m-t-5" src="/assets/images/avatar-2.jpg" alt="Generic placeholder image">
                    </div>
                </a>
                <div class="flex-grow-1 chat-menu-content">
                    <div class="">
                        <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                    </div>
                    <p class="chat-time">8:20 a.m.</p>
                </div>
            </div>
            <div class="d-flex chat-messages">
                <div class="flex-grow-1 chat-menu-reply">
                    <div class="">
                        <p class="chat-cont">Ohh! very nice</p>
                    </div>
                    <p class="chat-time">8:22 a.m.</p>
                </div>
            </div>
            <div class="d-flex chat-messages">
                <a class="media-left photo-table" href="#!">
                    <div class="flex-shrink-0">
                        <img class="media-object img-radius img-radius m-t-5" src="/assets/images/avatar-2.jpg" alt="Generic placeholder image">
                    </div>
                </a>
                <div class="media-body chat-menu-content">
                    <div class="">
                        <p class="chat-cont">can you come with me?</p>
                    </div>
                    <p class="chat-time">8:20 a.m.</p>
                </div>
            </div>
        </div>
        <div class="chat-reply-box">
            <div class="right-icon-control">
                <div class="input-group input-group-button">
                    <input type="hidden" id="selectedChatUserID">
                    <input type="text" class="form-control" id="chatDraft" placeholder="Write hear . . ">
                    <button class="btn btn-primary waves-effect waves-light" id="chatSendButton" type="button">
                        <i class="feather icon-message-circle"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- [ chat message ] end -->
<?php } ?>