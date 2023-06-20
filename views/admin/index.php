<?php
# Initialize the session
use App\Helpers\View;

$_SESSION["username"] = "Admin";

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= WEB_TITLE; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Admindek Bootstrap admin template made using Bootstrap 5 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="flat ui, admin Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="colorlib" />
    <!-- Favicon icon -->
    <link rel="icon" href="/assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="/bower_components/bootstrap/css/bootstrap.min.css">
    <!-- waves.css -->
    <link rel="stylesheet" href="/assets/pages/waves/css/waves.min.css" type="text/css" media="all">
    <!-- feather icon -->
    <link rel="stylesheet" type="text/css" href="/assets/icon/feather/css/feather.css">
    <!-- font-awesome-n -->
    <link rel="stylesheet" type="text/css" href="/assets/css/font-awesome-n.min.css">
    <!-- Chartlist chart css -->
    <link rel="stylesheet" href="/bower_components/chartist/css/chartist.css" type="text/css" media="all">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/widget.css">
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
            <!-- [ Header ] start -->
            <?php View::render('components.header'); ?>
            <?php View::render('components.chat'); ?>
           

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <?php View::render('admin.sidebar'); ?>
                    <div class="pcoded-content container">
                        <!-- [ breadcrumb ] start -->
                        <div class="page-header card">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                        <i class="feather icon-home bg-c-blue"></i>
                                        <div class="d-inline">
                                            <h5>Dashboard</h5>
                                            <span>Show users, pages, events and activities</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="page-header-breadcrumb">
                                        <ul class=" breadcrumb breadcrumb-title breadcrumb-padding">
                                            <li class="breadcrumb-item">
                                                <a href="index.html"><i class="feather icon-home"></i></a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Dashboard</a> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- [ breadcrumb ] end -->
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-body">
                                        <!-- [ page content ] start -->
                                        <div class="row">
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card comp-card">
                                                    <div class="card-body">
                                                        <div class="row align-items-center">
                                                            <div class="col">
                                                                <h6 class="m-b-25">Sales</h6>
                                                                <h3 class="f-w-700 text-c-blue">15</h3>
                                                            </div>
                                                            <div class="col-auto">
                                                                <i class="fas fa-eye bg-c-blue"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card comp-card">
                                                    <div class="card-body">
                                                        <div class="row align-items-center">
                                                            <div class="col">
                                                                <h6 class="m-b-25">Accountants</h6>
                                                                <h3 class="f-w-700 text-c-green">30</h3>
                                                            </div>
                                                            <div class="col-auto">
                                                                <i class="fas fa-bullseye bg-c-green"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card comp-card">
                                                    <div class="card-body">
                                                        <div class="row align-items-center">
                                                            <div class="col">
                                                                <h6 class="m-b-25">Designers</h6>
                                                                <h3 class="f-w-700 text-c-yellow">26</h3>
                                                            </div>
                                                            <div class="col-auto">
                                                                <i class="fas fa-hand-paper bg-c-yellow"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card comp-card">
                                                    <div class="card-body">
                                                        <div class="row align-items-center">
                                                            <div class="col">
                                                                <h6 class="m-b-25">Developers</h6>
                                                                <h3 class="f-w-700 text-c-yellow">42</h3>
                                                            </div>
                                                            <div class="col-auto">
                                                                <i class="fas fa-hand-paper bg-c-yellow"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="card proj-progress-card">
                                                    <div class="card-block">
                                                        <div class="row">
                                                            <div class="col-xl-3 col-md-6">
                                                                <h6>Invoices</h6>
                                                                <h5 class="m-b-30 f-w-700">123
                                                                    <span class="text-c-green m-l-10">+1.69%</span>
                                                                </h5>
                                                                <div class="progress">
                                                                    <div class="progress-bar bg-c-red" style="width:25%"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-3 col-md-6">
                                                                <h6>Projects</h6>
                                                                <h5 class="m-b-30 f-w-700">4,569
                                                                    <span class="text-c-red m-l-10">-0.5%</span>
                                                                </h5>
                                                                <div class="progress">
                                                                    <div class="progress-bar bg-c-blue" style="width:65%"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-3 col-md-6">
                                                                <h6>Services</h6>
                                                                <h5 class="m-b-30 f-w-700">89
                                                                    <span class="text-c-green m-l-10">+0.99%</span>
                                                                </h5>
                                                                <div class="progress">
                                                                    <div class="progress-bar bg-c-green" style="width:85%"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-3 col-md-6">
                                                                <h6>Quotation</h6>
                                                                <h5 class="m-b-30 f-w-700">35
                                                                    <span class="text-c-green m-l-10">+0.35%</span>
                                                                </h5>
                                                                <div class="progress">
                                                                    <div class="progress-bar bg-c-yellow" style="width:45%"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-6 col-md-12">
                                                <div class="card latest-update-card">
                                                    <div class="card-header">
                                                        <h5>What’s New</h5>
                                                        <div class="card-header-right">
                                                            <ul class="list-unstyled card-option">
                                                                <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li>
                                                                <li><i class="feather icon-maximize full-card"></i></li>
                                                                <li><i class="feather icon-minus minimize-card"></i></li>
                                                                <li><i class="feather icon-refresh-cw reload-card"></i></li>
                                                                <li><i class="feather icon-trash close-card"></i></li>
                                                                <li><i class="feather icon-chevron-left open-card-option"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="scroll-widget">
                                                            <div class="latest-update-box">
                                                                <div class="row p-t-20 p-b-30">
                                                                    <div class="col-auto text-end update-meta p-r-0">
                                                                        <i class="feather icon-mail bg-c-green update-icon"></i>
                                                                    </div>
                                                                    <div class="col p-l-5">
                                                                        <a href="#!"><h6>You have received new email.</h6></a>
                                                                        <p class="text-muted m-b-0">Jonny michel</p>
                                                                    </div>
                                                                </div>
                                                                <div class="row p-b-30">
                                                                    <div class="col-auto text-end update-meta p-r-0">
                                                                        <i class="feather icon-briefcase bg-c-blue update-icon"></i>
                                                                    </div>
                                                                    <div class="col p-l-5">
                                                                        <a href="#!"><h6>Manager posted new project</h6></a>
                                                                        <p class="text-muted m-b-0">Hemilton</p>
                                                                    </div>
                                                                </div>
                                                                <div class="row p-b-30">
                                                                    <div class="col-auto text-end update-meta p-r-0">
                                                                        <i class="feather icon-briefcase bg-c-blue update-icon"></i>
                                                                    </div>
                                                                    <div class="col p-l-5">
                                                                        <a href="#!"><h6>Manager posted new project.</h6></a>
                                                                        <p class="text-muted m-b-0">Hemilton</p>
                                                                    </div>
                                                                </div>
                                                                <div class="row p-b-30">
                                                                    <div class="col-auto text-end update-meta p-r-0">
                                                                        <i class="feather icon-briefcase bg-c-blue update-icon"></i>
                                                                    </div>
                                                                    <div class="col p-l-5">
                                                                        <a href="#!"><h6>Manager posted new project.</h6></a>
                                                                        <p class="text-muted m-b-0">Jonny michel</p>
                                                                    </div>
                                                                </div>          
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-6">
                                                <div class="card latest-update-card">
                                                    <div class="card-header">
                                                        <h5>Latest Activity</h5>
                                                        <div class="card-header-right">
                                                            <ul class="list-unstyled card-option">
                                                                <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li>
                                                                <li><i class="feather icon-maximize full-card"></i></li>
                                                                <li><i class="feather icon-minus minimize-card"></i></li>
                                                                <li><i class="feather icon-refresh-cw reload-card"></i></li>
                                                                <li><i class="feather icon-trash close-card"></i></li>
                                                                <li><i class="feather icon-chevron-left open-card-option"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="scroll-widget">
                                                            <div class="latest-update-box">
                                                                <div class="row p-t-20 p-b-30">
                                                                    <div class="col-auto text-end update-meta p-r-0">
                                                                        <i class="b-primary update-icon ring"></i>
                                                                    </div>
                                                                    <div class="col p-l-5">
                                                                        <a href="#!"><h6>Project Update</h6></a>
                                                                        <p class="text-muted m-b-0"> Project has been updated <a href="#!" class="text-c-blue"> More</a></p>
                                                                    </div>
                                                                </div>
                                                                <div class="row p-b-30">
                                                                    <div class="col-auto text-end update-meta p-r-0">
                                                                        <i class="b-primary update-icon ring"></i>
                                                                    </div>
                                                                    <div class="col p-l-5">
                                                                        <a href="#!"><h6>Project Update</h6></a>
                                                                        <p class="text-muted m-b-0">Project has been updated<a href="#!" class="text-c-blue"> More</a></p>
                                                                    </div>
                                                                </div>
                                                                <div class="row p-b-30">
                                                                    <div class="col-auto text-end update-meta p-r-0">
                                                                        <i class="b-success update-icon ring"></i>
                                                                    </div>
                                                                    <div class="col p-l-5">
                                                                        <a href="#!"><h6>Project Update</h6></a>
                                                                        <p class="text-muted m-b-0">Project has been updated <a href="#!" class="text-c-green"> More</a></p>
                                                                    </div>
                                                                </div>
                                                                <div class="row p-b-30">
                                                                    <div class="col-auto text-end update-meta p-r-0">
                                                                        <i class="b-danger update-icon ring"></i>
                                                                    </div>
                                                                    <div class="col p-l-5">
                                                                        <a href="#!"><h6>Project Update</h6></a>
                                                                        <p class="text-muted m-b-0">Project has been updated <a href="#!" class="text-c-red"> More</a></p>
                                                                    </div>
                                                                </div>                                        
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- [ page content ] end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [ style Customizer ] start -->
                    <div id="styleSelector">
                    </div>
                    <!-- [ style Customizer ] end -->
                </div>
            </div>
        </div>
    </div>
    <!-- Warning Section Ends -->
    <!-- Required Jquery -->
    <script type="text/javascript" src="/bower_components/jquery/js/jquery.min.js"></script>
    <script type="text/javascript" src="/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="/bower_components/popper.js/js/popper.min.js"></script>
    <script type="text/javascript" src="/bower_components/bootstrap/js/bootstrap.min.js"></script>
    <!-- waves js -->
    <script src="/assets/pages/waves/js/waves.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>
    <!-- Float Chart js -->
    <script src="/assets/pages/chart/float/jquery.flot.js"></script>
    <script src="/assets/pages/chart/float/jquery.flot.categories.js"></script>
    <script src="/assets/pages/chart/float/curvedLines.js"></script>
    <script src="/assets/pages/chart/float/jquery.flot.tooltip.min.js"></script>
    <!-- Chartlist charts -->
    <script src="/bower_components/chartist/js/chartist.js"></script>
    <!-- amchart js -->
    <script src="/assets/pages/widget/amchart/amcharts.js"></script>
    <script src="/assets/pages/widget/amchart/serial.js"></script>
    <script src="/assets/pages/widget/amchart/light.js"></script>
    <!-- Custom js -->
    <script src="/assets/js/pcoded.min.js"></script>
    <script src="/assets/js/vertical/vertical-layout.min.js"></script>
    <script type="text/javascript" src="/assets/pages/dashboard/custom-dashboard.min.js"></script>
    <script type="text/javascript" src="/assets/js/script.min.js"></script>
</body>

</html>
