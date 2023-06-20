<?php

session_start();
require_once "../global.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>PMarket</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
      <!-- Meta -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="description" content="Admindek Bootstrap admin template made using Bootstrap 5 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
      <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
      <meta name="author" content="colorlib" />
      <!-- Favicon icon -->
      <link rel="icon" href="<?= BASE_URL; ?>/files/assets/images/favicon.ico" type="image/x-icon">
      <!-- Google font-->     <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet"><link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">
      <!-- Required Fremwork -->
      <link rel="stylesheet" type="text/css" href="<?= BASE_URL; ?>/files/bower_components/bootstrap/css/bootstrap.min.css">
      <!-- waves.css -->
      <link rel="stylesheet" href="<?= BASE_URL; ?>/files/assets/pages/waves/css/waves.min.css" type="text/css" media="all">
      <!-- feather icon -->
      <link rel="stylesheet" type="text/css" href="<?= BASE_URL; ?>/files/assets/icon/feather/css/feather.css">
      <!-- themify-icons line icon -->
      <link rel="stylesheet" type="text/css" href="<?= BASE_URL; ?>/files/assets/icon/themify-icons/themify-icons.css">
      <!-- ico font -->
      <link rel="stylesheet" type="text/css" href="<?= BASE_URL; ?>/files/assets/icon/icofont/css/icofont.css">
      <!-- Font Awesome -->
      <link rel="stylesheet" type="text/css" href="<?= BASE_URL; ?>/files/assets/icon/font-awesome/css/font-awesome.min.css">
          <!-- Data Table Css -->
    <link rel="stylesheet" type="text/css" href="<?= BASE_URL; ?>/files/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="<?= BASE_URL; ?>/files/assets/pages/data-table/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="<?= BASE_URL; ?>/files/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css">
    
      
      <!-- Style.css -->
      <link rel="stylesheet" type="text/css" href="<?= BASE_URL; ?>/files/assets/css/style.css">
      <link rel="stylesheet" type="text/css" href="<?= BASE_URL; ?>/files/assets/css/pages.css">

      <style>
        .note-popover {
            display: none;
        }
    </style>
</head>

<body>
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-bar"></div>
    </div>
    <!-- [ Pre-loader ] end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <?php require_once "../components/header.php"; ?>
            <?php require_once "../components/chat.php"; ?>


            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <?php require_once "../admin/sidebar.php"; ?>
                    <div class="pcoded-content">
                        <!-- [ breadcrumb ] start -->
                        <div class="page-header card">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                        <i class="fa fa-user bg-c-blue"></i>
                                        <div class="d-inline">
                                            <h5>Users</h5>
                                            <span>List all users</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="page-header-breadcrumb">
                                        <ul class=" breadcrumb breadcrumb-title breadcrumb-padding">
                                            <li class="breadcrumb-item">
                                                <a href="index.html"><i class="feather icon-home"></i></a>
                                            </li>
                                            <li class="breadcrumb-item">
                                                <a href="#!"> Users </a>
                                            </li>
                                            <li class="breadcrumb-item">
                                                <a href="#!">All</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- [ breadcrumb ] end -->
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5>Users</h5>
                                                <span>Add, Edit and remove users</span>
                                            </div>
                                            <div class="card-block">
                                                <div class="dt-responsive table-responsive">
                                                    <table id="multi-colum-dt" class="table table-striped table-bordered nowrap">
                                                        <thead>
                                                            <tr>
                                                                <th>Name</th>
                                                                <th>Type</th>
                                                                <th>Office</th>
                                                                <th>Phone</th>
                                                                <th>Birthday</th>
                                                                <th>Salary</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Tiger Nixon</td>
                                                                <td>Manager</td>
                                                                <td>Edinburgh</td>
                                                                <td>111-111-1111</td>
                                                                <td>2011/04/25</td>
                                                                <td>$320,800</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Garrett Winters</td>
                                                                <td>Accountant</td>
                                                                <td>Tokyo</td>
                                                                <td>111-111-1111</td>
                                                                <td>2011/07/25</td>
                                                                <td>$170,750</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Ashton Cox</td>
                                                                <td>Sales</td>
                                                                <td>San Francisco</td>
                                                                <td>111-111-1111</td>
                                                                <td>2009/01/12</td>
                                                                <td>$86,000</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Cedric Kelly</td>
                                                                <td>Sales</td>
                                                                <td>Edinburgh</td>
                                                                <td>111-111-1111</td>
                                                                <td>2012/03/29</td>
                                                                <td>$433,060</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Airi Satou</td>
                                                                <td>Accountant</td>
                                                                <td>Tokyo</td>
                                                                <td>111-111-1111</td>
                                                                <td>2008/11/28</td>
                                                                <td>$162,700</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Brielle Williamson</td>
                                                                <td>Sales</td>
                                                                <td>New York</td>
                                                                <td>111-111-1111</td>
                                                                <td>2012/12/02</td>
                                                                <td>$372,000</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Herrod Chandler</td>
                                                                <td>Sales Assistant</td>
                                                                <td>San Francisco</td>
                                                                <td>111-111-1111</td>
                                                                <td>2012/08/06</td>
                                                                <td>$137,500</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Rhona Davidson</td>
                                                                <td>Developer</td>
                                                                <td>Tokyo</td>
                                                                <td>111-111-1111</td>
                                                                <td>2010/10/14</td>
                                                                <td>$327,900</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Colleen Hurst</td>
                                                                <td>Developer</td>
                                                                <td>San Francisco</td>
                                                                <td>111-111-1111</td>
                                                                <td>2009/09/15</td>
                                                                <td>$205,500</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Sonya Frost</td>
                                                                <td>Developer</td>
                                                                <td>Edinburgh</td>
                                                                <td>111-111-1111</td>
                                                                <td>2008/12/13</td>
                                                                <td>$103,600</td>
                                                            </tr>                                                            
                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                <th>Name</th>
                                                                <th>Type</th>
                                                                <th>Office</th>
                                                                <th>Phone</th>
                                                                <th>Birthday</th>
                                                                <th>Salary</th>
                                                            </tr>
                                                        </tfoot>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Page-body end -->
                                </div>
                            </div>
                            <!-- Main-body end -->
                            <div id="styleSelector">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="<?= BASE_URL; ?>/files/assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="<?= BASE_URL; ?>/files/assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="<?= BASE_URL; ?>/files/assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="<?= BASE_URL; ?>/files/assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="<?= BASE_URL; ?>/files/assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
<!-- Warning Section Ends -->
<!-- Required Jquery -->
<script type="text/javascript" src="<?= BASE_URL; ?>/files/bower_components/jquery/js/jquery.min.js"></script>
<script type="text/javascript" src="<?= BASE_URL; ?>/files/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?= BASE_URL; ?>/files/bower_components/popper.js/js/popper.min.js"></script>
<script type="text/javascript" src="<?= BASE_URL; ?>/files/bower_components/bootstrap/js/bootstrap.min.js"></script>
<!-- waves js -->
<script src="<?= BASE_URL; ?>/files/assets/pages/waves/js/waves.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="<?= BASE_URL; ?>/files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>
<!-- modernizr js -->
<script type="text/javascript" src="<?= BASE_URL; ?>/files/bower_components/modernizr/js/modernizr.js"></script>
<script type="text/javascript" src="<?= BASE_URL; ?>/files/bower_components/modernizr/js/css-scrollbars.js"></script>
<!-- tinymce js -->
<script src="<?= BASE_URL; ?>/files/assets/pages/wysiwyg-editor/js/tinymce.min.js"></script>

    <!-- data-table js -->
    <script src="<?= BASE_URL; ?>/files/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?= BASE_URL; ?>/files/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?= BASE_URL; ?>/files/assets/pages/data-table/js/jszip.min.js"></script>
    <script src="<?= BASE_URL; ?>/files/assets/pages/data-table/js/pdfmake.min.js"></script>
    <script src="<?= BASE_URL; ?>/files/assets/pages/data-table/js/vfs_fonts.js"></script>
    <script src="<?= BASE_URL; ?>/files/bower_components/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?= BASE_URL; ?>./files/bower_components/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?= BASE_URL; ?>/files/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= BASE_URL; ?>/files/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= BASE_URL; ?>/files/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
    <!-- Custom js -->
    <script src="<?= BASE_URL; ?>/files/assets/pages/data-table/js/data-table-custom.js"></script>


<!-- Custom js -->
<script src="<?= BASE_URL; ?>/files/assets/pages/wysiwyg-editor/wysiwyg-editor.js"></script>
<script src="<?= BASE_URL; ?>/files/assets/js/pcoded.min.js"></script>
<script src="<?= BASE_URL; ?>/files/assets/js/vertical/vertical-layout.min.js"></script>
<script src="<?= BASE_URL; ?>/files/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="<?= BASE_URL; ?>/files/assets/js/script.js"></script>
</body>

</html>
