<nav class="pcoded-navbar">
<div class="pcoded-inner-navbar">
    <ul class="pcoded-item">
        <li class="pcoded-hasmenu">
            <a href="javascript:void(0)" class="waves-effect waves-dark">
                <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                <span class="pcoded-mtext">Navigation</span>
            </a>
            <ul class="pcoded-submenu">
                <li class="">
                    <a href="<?= BASE_URL; ?>/src/index.php" class="waves-effect waves-dark">
                    <span class="pcoded-mtext" data-i18n="nav.navigate.main">Dashboard</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="pcoded-hasmenu ">
            <a href="javascript:void(0)" class="waves-effect waves-dark">
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
</nav>