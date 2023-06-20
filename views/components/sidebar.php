<?php if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] || 1) { ?>
                    <!-- [ navigation menu ] start -->
                    <nav class="pcoded-navbar">
                        <div class="nav-list">
                            <div class="pcoded-inner-navbar main-menu">
                                <ul class="pcoded-item pcoded-left-item">
                                    <li class=" ">
                                        <a href="<?= BASE_URL; ?>/src/index.php" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                            <span class="pcoded-mtext">Dashboard</span>
                                        </a>
                                    </li>
                                </ul>

                                <ul class="pcoded-item pcoded-left-item">
                                    <li class="pcoded-hasmenu ">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
        									<span class="pcoded-micon">
        										<i class="feather icon-mail"></i>
        									</span>
                                            <span class="pcoded-mtext">Email</span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class="">
                                                <a href="<?= BASE_URL; ?>/src/email/email-compose.php" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Compose Email</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="<?= BASE_URL; ?>/src/email/email-inbox.php" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Inbox</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="<?= BASE_URL; ?>/src/email/email-read.php" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Read Mail</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>                                
                            </div>
                        </div>
                    </nav>                    
                    <!-- [ navigation menu ] end -->
                    <?php } ?>