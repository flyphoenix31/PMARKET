<?php if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] || 1) { ?>
                    <!-- [ navigation menu ] start -->
                    <nav class="pcoded-navbar">
                        <div class="nav-list">
                            <div class="pcoded-inner-navbar main-menu">
                                <ul class="pcoded-item pcoded-left-item">
                                    <li class=" ">
                                        <a href="<?= BASE_URL; ?>/src/admin/index.php" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                            <span class="pcoded-mtext">Dashboard</span>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="pcoded-item pcoded-left-item">
                                    <li class="pcoded-hasmenu ">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
        									<span class="pcoded-micon">
        										<i class="fa fa-user"></i>
        									</span>
                                            <span class="pcoded-mtext">Users</span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class="">
                                                <a href="<?= BASE_URL; ?>/src/admin/users.php" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">All</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Managers</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Sales</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Accountants</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Designers</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Developers</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Secretary</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <ul class="pcoded-item pcoded-left-item">
                                    <li class="pcoded-hasmenu ">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
        									<span class="pcoded-micon">
        										<i class="fa fa-file"></i>
        									</span>
                                            <span class="pcoded-mtext">Pages</span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class="">
                                                <a href="" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Contacts</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Quotation</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Invoice</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Projects</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Services</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Debit/Credit</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Salaries</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Newsletter</span>
                                                </a>
                                            </li>
                                        </ul>
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
                                <ul class="pcoded-item pcoded-left-item">
                                    <li class="pcoded-hasmenu ">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
        									<span class="pcoded-micon">
        										<i class="fa fa-users"></i>
        									</span>
                                            <span class="pcoded-mtext">Visitors</span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class="">
                                                <a href="" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Share</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Demo</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Support</span>
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