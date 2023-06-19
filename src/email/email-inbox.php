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
      <!-- Style.css -->
      <link rel="stylesheet" type="text/css" href="<?= BASE_URL; ?>/files/assets/css/style.css">
      <link rel="stylesheet" type="text/css" href="<?= BASE_URL; ?>/files/assets/css/pages.css">

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
              <!-- [ navigation menu ] start -->
              <?php require_once "../admin/sidebar.php"; ?>
              <!-- [ navigation menu ] end -->
              <div class="pcoded-content">
                <!-- [ breadcrumb ] start -->
                <div class="page-header card">
                    <div class="row align-items-end">
                        <div class="col-lg-8">
                            <div class="page-header-title">
                                <i class="feather icon-mail bg-c-blue"></i>
                                <div class="d-inline">
                                    <h5>Inbox</h5>
                                    <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
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
                                      <a href="#!">Email</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                      <a href="#!">Inbox</a>
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
                          <!-- Email-card start -->
                          <div class="card-block email-card">
                            <div class="row">
                              <div class="col-lg-12 col-xl-3">
                                <div class="user-head row">
                                  <div class="user-face">
                                    <img class="img-fluid" src="<?= BASE_URL; ?>/files/assets/images/logo.png" alt="Theme-Logo" />
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-12 col-xl-9">
                                <div class="mail-box-head row justify-content-end">
                                  <div class="col-auto">
                                    <form class="form-material">
                                      <div class="material-group">
                                        <div class="form-group form-default">
                                          <input type="text" name="footer-email" class="form-control" required="">
                                          <span class="form-bar"></span>
                                          <label class="form-label float-label">Search</label>
                                        </div>
                                        <div class="material-addone">
                                          <i class="icofont icofont-search"></i>
                                        </div>
                                      </div>
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <!-- Left-side section start -->
                              <div class="col-lg-12 col-xl-3">
                                <div class="user-body">
                                  <div class="p-20 text-center">
                                    <a href="email-compose.html" class="btn btn-danger waves-effect">Compose</a>
                                  </div>
                                  <ul class="page-list nav nav-tabs flex-column" id="pills-tab" role="tablist">
                                    <li class="nav-item mail-section">
                                      <a class="nav-link waves-effect d-block active" data-toggle="pill" href="#e-inbox" role="tab">
                                        <i class="icofont icofont-inbox"></i> Inbox
                                        <span class="label label-primary float-end">6</span>
                                      </a>
                                    </li>
                                    <li class="nav-item mail-section">
                                      <a class="nav-link waves-effect d-block" data-toggle="pill" href="#e-starred" role="tab">
                                        <i class="icofont icofont-star"></i> Starred
                                      </a>
                                    </li>
                                    <li class="nav-item mail-section">
                                      <a class="nav-link waves-effect d-block" data-toggle="pill" href="#e-drafts" role="tab">
                                        <i class="icofont icofont-file-text"></i> Drafts
                                      </a>
                                    </li>
                                    <li class="nav-item mail-section">
                                      <a class="nav-link waves-effect d-block" data-toggle="pill" href="#e-sent" role="tab">
                                        <i class="icofont icofont-paper-plane"></i> Sent Mail
                                      </a>
                                    </li>
                                    <li class="nav-item mail-section">
                                      <a class="nav-link waves-effect d-block" data-toggle="pill" href="#e-trash" role="tab">
                                        <i class="icofont icofont-ui-delete"></i> Trash
                                        <span class="label label-info float-end">30</span>
                                      </a>
                                    </li>
                                  </ul>
                                  <ul class="p-20 label-list">
                                    <li>
                                      <h5>Labels</h5>
                                    </li>
                                    <li>
                                      <a class="mail-work" href="">Work</a>
                                    </li>
                                    <li>
                                      <a class="mail-design" href="">Design</a>
                                    </li>
                                    <li>
                                      <a class="mail-family" href="">Family</a>
                                    </li>
                                    <li>
                                      <a class="mail-friends" href="">Friends</a>
                                    </li>
                                    <li>
                                      <a class="mail-office" href="">Office</a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                              <!-- Left-side section end -->
                              <!-- Right-side section start -->
                              <div class="col-lg-12 col-xl-9">
                                <div class="tab-content" id="pills-tabContent">
                                  <div class="tab-pane fade show active" id="e-inbox" role="tabpanel">

                                    <div class="mail-body">
                                      <div class="mail-body-header">
                                        <button type="button" class="btn btn-primary btn-xs waves-effect waves-light">
                                          <i class="icofont icofont-exclamation-circle"></i>
                                        </button>
                                        <button type="button" class="btn btn-success btn-xs waves-effect waves-light">
                                          <i class="icofont icofont-inbox"></i>
                                        </button>
                                        <button type="button" class="btn btn-danger btn-xs waves-effect waves-light">
                                          <i class="icofont icofont-ui-delete"></i>
                                        </button>
                                        <div class="btn-group dropdown-split-primary">
                                          <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="icofont icofont-ui-folder"></i>
                                          </button>
                                          <div class="dropdown-menu">
                                            <a class="dropdown-item waves-effect waves-light" href="#">Action</a>
                                            <a class="dropdown-item waves-effect waves-light" href="#">Another action</a>
                                            <a class="dropdown-item waves-effect waves-light" href="#">Something else</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item waves-effect waves-light" href="#">Separated link</a>
                                          </div>
                                        </div>
                                        <div class="btn-group dropdown-split-primary">
                                          <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            More
                                          </button>
                                          <div class="dropdown-menu">
                                            <a class="dropdown-item waves-effect waves-light" href="#">Action</a>
                                            <a class="dropdown-item waves-effect waves-light" href="#">Another action</a>
                                            <a class="dropdown-item waves-effect waves-light" href="#">Something else</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item waves-effect waves-light" href="#">Separated link</a>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="mail-body-content">
                                        <div class="table-responsive">
                                          <table class="table">
                                            <tr class="unread">
                                              <td>
                                                <div class="check-star">
                                                  <div class="checkbox-fade fade-in-primary checkbox">
                                                    <label class="form-label">
                                                      <input type="checkbox" value="">
                                                      <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
                                                    </label>
                                                  </div>
                                                  <i class="icofont icofont-star text-warning"></i>
                                                </div>
                                              </td>
                                              <td><a href="email-read.html" class="email-name waves-effect">Google Inc</a></td>
                                              <td><a href="email-read.html" class="email-name waves-effect">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a></td>
                                              <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
                                              <td class="email-time">08:01 AM</td>
                                            </tr>
                                            <tr class="unread">
                                              <td>
                                                <div class="check-star">
                                                  <div class="checkbox-fade fade-in-primary checkbox">
                                                    <label class="form-label">
                                                      <input type="checkbox" value="">
                                                      <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
                                                    </label>
                                                  </div>
                                                  <i class="icofont icofont-star text-primary"></i>
                                                </div>
                                              </td>
                                              <td><a href="email-read.html" class="email-name waves-effect">John Doe</a></td>
                                              <td><a href="email-read.html" class="email-name waves-effect">Coming Up Next Week</a></td>
                                              <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
                                              <td class="email-time">13:02 PM</td>
                                            </tr>
                                            <tr class="unread">
                                              <td>
                                                <div class="check-star">
                                                  <div class="checkbox-fade fade-in-primary checkbox">
                                                    <label class="form-label">
                                                      <input type="checkbox" value="">
                                                      <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
                                                    </label>
                                                  </div>
                                                  <i class="icofont icofont-star text-info"></i>
                                                </div>
                                              </td>
                                              <td><a href="email-read.html" class="email-name waves-effect">Sara Soudein</a></td>
                                              <td><a href="email-read.html" class="email-name waves-effect">SVG new updates comes for you</a></td>
                                              <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
                                              <td class="email-time">00:05 AM</td>
                                            </tr>
                                            <tr class="unread">
                                              <td>
                                                <div class="check-star">
                                                  <div class="checkbox-fade fade-in-primary checkbox">
                                                    <label class="form-label">
                                                      <input type="checkbox" value="">
                                                      <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
                                                    </label>
                                                  </div>
                                                  <i class="icofont icofont-star text-danger"></i>
                                                </div>
                                              </td>
                                              <td><a href="email-read.html" class="email-name waves-effect">Rinky Behl</a></td>
                                              <td><a href="email-read.html" class="email-name waves-effect">Photoshop updates are available</a></td>
                                              <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
                                              <td class="email-time">10:01 AM</td>
                                            </tr>
                                            <tr class="read">
                                              <td>
                                                <div class="check-star">
                                                  <div class="checkbox-fade fade-in-primary checkbox">
                                                    <label class="form-label">
                                                      <input type="checkbox" value="">
                                                      <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
                                                    </label>
                                                  </div>
                                                  <i class="icofont icofont-star text-primary"></i>
                                                </div>
                                              </td>
                                              <td><a href="email-read.html" class="email-name waves-effect">Harry John</a></td>
                                              <td><a href="email-read.html" class="email-name waves-effect">New upcoming data available</a></td>
                                              <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
                                              <td class="email-time">11:01 AM</td>
                                            </tr>
                                            <tr class="read">
                                              <td>
                                                <div class="check-star">
                                                  <div class="checkbox-fade fade-in-primary checkbox">
                                                    <label class="form-label">
                                                      <input type="checkbox" value="">
                                                      <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
                                                    </label>
                                                  </div>
                                                  <i class="icofont icofont-star text-danger"></i>
                                                </div>
                                              </td>
                                              <td><a href="email-read.html" class="email-name waves-effect">Hanry Joseph</a></td>
                                              <td><a href="email-read.html" class="email-name waves-effect">SCSS current working for new updates</a></td>
                                              <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
                                              <td class="email-time">12:01 PM</td>
                                            </tr>
                                            <tr class="read">
                                              <td>
                                                <div class="check-star">
                                                  <div class="checkbox-fade fade-in-primary checkbox">
                                                    <label class="form-label">
                                                      <input type="checkbox" value="">
                                                      <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
                                                    </label>
                                                  </div>
                                                  <i class="icofont icofont-star text-primary"></i>
                                                </div>
                                              </td>
                                              <td><a href="email-read.html" class="email-name waves-effect">Liu Koi Yan</a></td>
                                              <td><a href="email-read.html" class="email-name waves-effect">Charts waiting for you</a></td>
                                              <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
                                              <td class="email-time">07:15 AM</td>
                                            </tr>
                                            <tr class="unread">
                                              <td>
                                                <div class="check-star">
                                                  <div class="checkbox-fade fade-in-primary checkbox">
                                                    <label class="form-label">
                                                      <input type="checkbox" value="">
                                                      <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
                                                    </label>
                                                  </div>
                                                  <i class="icofont icofont-star text-warning"></i>
                                                </div>
                                              </td>
                                              <td><a href="email-read.html" class="email-name waves-effect">Google Inc</a></td>
                                              <td><a href="email-read.html" class="email-name waves-effect">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a></td>
                                              <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
                                              <td class="email-time">08:01 AM</td>
                                            </tr>
                                            <tr class="unread">
                                              <td>
                                                <div class="check-star">
                                                  <div class="checkbox-fade fade-in-primary checkbox">
                                                    <label class="form-label">
                                                      <input type="checkbox" value="">
                                                      <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
                                                    </label>
                                                  </div>
                                                  <i class="icofont icofont-star text-primary"></i>
                                                </div>
                                              </td>
                                              <td><a href="email-read.html" class="email-name waves-effect">John Doe</a></td>
                                              <td><a href="email-read.html" class="email-name waves-effect">Coming Up Next Week</a></td>
                                              <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
                                              <td class="email-time">13:02 PM</td>
                                            </tr>
                                            <tr class="unread">
                                              <td>
                                                <div class="check-star">
                                                  <div class="checkbox-fade fade-in-primary checkbox">
                                                    <label class="form-label">
                                                      <input type="checkbox" value="">
                                                      <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
                                                    </label>
                                                  </div>
                                                  <i class="icofont icofont-star text-info"></i>
                                                </div>
                                              </td>
                                              <td><a href="email-read.html" class="email-name waves-effect">Sara Soudein</a></td>
                                              <td><a href="email-read.html" class="email-name waves-effect">SVG new updates comes for you</a></td>
                                              <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
                                              <td class="email-time">00:05 AM</td>
                                            </tr>
                                            <tr class="unread">
                                              <td>
                                                <div class="check-star">
                                                  <div class="checkbox-fade fade-in-primary checkbox">
                                                    <label class="form-label">
                                                      <input type="checkbox" value="">
                                                      <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
                                                    </label>
                                                  </div>
                                                  <i class="icofont icofont-star text-danger"></i>
                                                </div>
                                              </td>
                                              <td><a href="email-read.html" class="email-name waves-effect">Rinky Behl</a></td>
                                              <td><a href="email-read.html" class="email-name waves-effect">Photoshop updates are available</a></td>
                                              <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
                                              <td class="email-time">10:01 AM</td>
                                            </tr>
                                            <tr class="read">
                                              <td>
                                                <div class="check-star">
                                                  <div class="checkbox-fade fade-in-primary checkbox">
                                                    <label class="form-label">
                                                      <input type="checkbox" value="">
                                                      <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
                                                    </label>
                                                  </div>
                                                  <i class="icofont icofont-star text-primary"></i>
                                                </div>
                                              </td>
                                              <td><a href="email-read.html" class="email-name waves-effect">Harry John</a></td>
                                              <td><a href="email-read.html" class="email-name waves-effect">New upcoming data available</a></td>
                                              <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
                                              <td class="email-time">11:01 AM</td>
                                            </tr>
                                            <tr class="read">
                                              <td>
                                                <div class="check-star">
                                                  <div class="checkbox-fade fade-in-primary checkbox">
                                                    <label class="form-label">
                                                      <input type="checkbox" value="">
                                                      <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
                                                    </label>
                                                  </div>
                                                  <i class="icofont icofont-star text-danger"></i>
                                                </div>
                                              </td>
                                              <td><a href="email-read.html" class="email-name waves-effect">Hanry Joseph</a></td>
                                              <td><a href="email-read.html" class="email-name waves-effect">SCSS current working for new updates</a></td>
                                              <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
                                              <td class="email-time">12:01 PM</td>
                                            </tr>
                                            <tr class="read">
                                              <td>
                                                <div class="check-star">
                                                  <div class="checkbox-fade fade-in-primary checkbox">
                                                    <label class="form-label">
                                                      <input type="checkbox" value="">
                                                      <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
                                                    </label>
                                                  </div>
                                                  <i class="icofont icofont-star text-primary"></i>
                                                </div>
                                              </td>
                                              <td><a href="email-read.html" class="email-name waves-effect">Liu Koi Yan</a></td>
                                              <td><a href="email-read.html" class="email-name waves-effect">Charts waiting for you</a></td>
                                              <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
                                              <td class="email-time">07:15 AM</td>
                                            </tr>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="tab-pane fade" id="e-starred" role="tabpanel">
                                    <div class="mail-body">
                                      <div class="mail-body-header">
                                        <button type="button" class="btn btn-primary btn-xs waves-effect waves-light">
                                          <i class="icofont icofont-star"></i>
                                        </button>
                                        <div class="btn-group dropdown-split-primary">
                                          <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="icofont icofont-ui-folder"></i>
                                          </button>
                                          <div class="dropdown-menu">
                                            <a class="dropdown-item waves-effect waves-light" href="#">Action</a>
                                            <a class="dropdown-item waves-effect waves-light" href="#">Another action</a>
                                            <a class="dropdown-item waves-effect waves-light" href="#">Something else</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item waves-effect waves-light" href="#">Separated link</a>
                                          </div>
                                        </div>
                                        <div class="btn-group dropdown-split-primary">
                                          <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            More
                                          </button>
                                          <div class="dropdown-menu">
                                            <a class="dropdown-item waves-effect waves-light" href="#">Action</a>
                                            <a class="dropdown-item waves-effect waves-light" href="#">Another action</a>
                                            <a class="dropdown-item waves-effect waves-light" href="#">Something else</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item waves-effect waves-light" href="#">Separated link</a>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="mail-body-content">
                                        <div class="table-responsive">
                                          <table class="table">
                                            <tr class="read">
                                              <td>
                                                <div class="check-star">
                                                  <div class="checkbox-fade fade-in-primary checkbox">
                                                    <label class="form-label">
                                                      <input type="checkbox" value="">
                                                      <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
                                                    </label>
                                                  </div>
                                                  <i class="icofont icofont-star text-primary"></i>
                                                </div>
                                              </td>
                                              <td><a href="email-read.html" class="email-name waves-effect">Harry John</a></td>
                                              <td><a href="email-read.html" class="email-name waves-effect">New upcoming data available</a></td>
                                              <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
                                              <td class="email-time">11:01 AM</td>
                                            </tr>
                                            <tr class="read">
                                              <td>
                                                <div class="check-star">
                                                  <div class="checkbox-fade fade-in-primary checkbox">
                                                    <label class="form-label">
                                                      <input type="checkbox" value="">
                                                      <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
                                                    </label>
                                                  </div>
                                                  <i class="icofont icofont-star text-danger"></i>
                                                </div>
                                              </td>
                                              <td><a href="email-read.html" class="email-name waves-effect">Hanry Joseph</a></td>
                                              <td><a href="email-read.html" class="email-name waves-effect">SCSS current working for new updates</a></td>
                                              <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
                                              <td class="email-time">12:01 PM</td>
                                            </tr>
                                            <tr class="read">
                                              <td>
                                                <div class="check-star">
                                                  <div class="checkbox-fade fade-in-primary checkbox">
                                                    <label class="form-label">
                                                      <input type="checkbox" value="">
                                                      <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
                                                    </label>
                                                  </div>
                                                  <i class="icofont icofont-star text-primary"></i>
                                                </div>
                                              </td>
                                              <td><a href="email-read.html" class="email-name waves-effect">Liu Koi Yan</a></td>
                                              <td><a href="email-read.html" class="email-name waves-effect">Charts waiting for you</a></td>
                                              <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
                                              <td class="email-time">07:15 AM</td>
                                            </tr>
                                            <tr class="unread">
                                              <td>
                                                <div class="check-star">
                                                  <div class="checkbox-fade fade-in-primary checkbox">
                                                    <label class="form-label">
                                                      <input type="checkbox" value="">
                                                      <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
                                                    </label>
                                                  </div>
                                                  <i class="icofont icofont-star text-warning"></i>
                                                </div>
                                              </td>
                                              <td><a href="email-read.html" class="email-name waves-effect">Google Inc</a></td>
                                              <td><a href="email-read.html" class="email-name waves-effect">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a></td>
                                              <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
                                              <td class="email-time">08:01 AM</td>
                                            </tr>
                                            <tr class="unread">
                                              <td>
                                                <div class="check-star">
                                                  <div class="checkbox-fade fade-in-primary checkbox">
                                                    <label class="form-label">
                                                      <input type="checkbox" value="">
                                                      <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
                                                    </label>
                                                  </div>
                                                  <i class="icofont icofont-star text-primary"></i>
                                                </div>
                                              </td>
                                              <td><a href="email-read.html" class="email-name waves-effect">John Doe</a></td>
                                              <td><a href="email-read.html" class="email-name waves-effect">Coming Up Next Week</a></td>
                                              <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
                                              <td class="email-time">13:02 PM</td>
                                            </tr>
                                            <tr class="unread">
                                              <td>
                                                <div class="check-star">
                                                  <div class="checkbox-fade fade-in-primary checkbox">
                                                    <label class="form-label">
                                                      <input type="checkbox" value="">
                                                      <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
                                                    </label>
                                                  </div>
                                                  <i class="icofont icofont-star text-info"></i>
                                                </div>
                                              </td>
                                              <td><a href="email-read.html" class="email-name waves-effect">Sara Soudein</a></td>
                                              <td><a href="email-read.html" class="email-name waves-effect">SVG new updates comes for you</a></td>
                                              <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
                                              <td class="email-time">00:05 AM</td>
                                            </tr>
                                            <tr class="unread">
                                              <td>
                                                <div class="check-star">
                                                  <div class="checkbox-fade fade-in-primary checkbox">
                                                    <label class="form-label">
                                                      <input type="checkbox" value="">
                                                      <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
                                                    </label>
                                                  </div>
                                                  <i class="icofont icofont-star text-danger"></i>
                                                </div>
                                              </td>
                                              <td><a href="email-read.html" class="email-name waves-effect">Rinky Behl</a></td>
                                              <td><a href="email-read.html" class="email-name waves-effect">Photoshop updates are available</a></td>
                                              <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
                                              <td class="email-time">10:01 AM</td>
                                            </tr>
                                            <tr class="read">
                                              <td>
                                                <div class="check-star">
                                                  <div class="checkbox-fade fade-in-primary checkbox">
                                                    <label class="form-label">
                                                      <input type="checkbox" value="">
                                                      <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
                                                    </label>
                                                  </div>
                                                  <i class="icofont icofont-star text-primary"></i>
                                                </div>
                                              </td>
                                              <td><a href="email-read.html" class="email-name waves-effect">Harry John</a></td>
                                              <td><a href="email-read.html" class="email-name waves-effect">New upcoming data available</a></td>
                                              <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
                                              <td class="email-time">11:01 AM</td>
                                            </tr>
                                            <tr class="read">
                                              <td>
                                                <div class="check-star">
                                                  <div class="checkbox-fade fade-in-primary checkbox">
                                                    <label class="form-label">
                                                      <input type="checkbox" value="">
                                                      <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
                                                    </label>
                                                  </div>
                                                  <i class="icofont icofont-star text-danger"></i>
                                                </div>
                                              </td>
                                              <td><a href="email-read.html" class="email-name waves-effect">Hanry Joseph</a></td>
                                              <td><a href="email-read.html" class="email-name waves-effect">SCSS current working for new updates</a></td>
                                              <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
                                              <td class="email-time">12:01 PM</td>
                                            </tr>
                                            <tr class="read">
                                              <td>
                                                <div class="check-star">
                                                  <div class="checkbox-fade fade-in-primary checkbox">
                                                    <label class="form-label">
                                                      <input type="checkbox" value="">
                                                      <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
                                                    </label>
                                                  </div>
                                                  <i class="icofont icofont-star text-primary"></i>
                                                </div>
                                              </td>
                                              <td><a href="email-read.html" class="email-name waves-effect">Liu Koi Yan</a></td>
                                              <td><a href="email-read.html" class="email-name waves-effect">Charts waiting for you</a></td>
                                              <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
                                              <td class="email-time">07:15 AM</td>
                                            </tr>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="tab-pane fade" id="e-drafts" role="tabpanel">

                                    <div class="mail-body">
                                      <div class="mail-body-header">
                                        <button type="button" class="btn btn-success btn-xs waves-effect waves-light">
                                          <i class="icofont icofont-inbox"></i>
                                        </button>
                                        <button type="button" class="btn btn-danger btn-xs waves-effect waves-light">
                                          <i class="icofont icofont-ui-delete"></i>
                                        </button>
                                        <div class="btn-group dropdown-split-primary">
                                          <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="icofont icofont-ui-folder"></i>
                                          </button>
                                          <div class="dropdown-menu">
                                            <a class="dropdown-item waves-effect waves-light" href="#">Action</a>
                                            <a class="dropdown-item waves-effect waves-light" href="#">Another action</a>
                                            <a class="dropdown-item waves-effect waves-light" href="#">Something else</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item waves-effect waves-light" href="#">Separated link</a>
                                          </div>
                                        </div>
                                        <div class="btn-group dropdown-split-primary">
                                          <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            More
                                          </button>
                                          <div class="dropdown-menu">
                                            <a class="dropdown-item waves-effect waves-light" href="#">Action</a>
                                            <a class="dropdown-item waves-effect waves-light" href="#">Another action</a>
                                            <a class="dropdown-item waves-effect waves-light" href="#">Something else</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item waves-effect waves-light" href="#">Separated link</a>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="mail-body-content">
                                        <div class="table-responsive">
                                          <table class="table">
                                            <tr class="unread">
                                              <td>
                                                <div class="check-star">
                                                  <div class="checkbox-fade fade-in-primary checkbox">
                                                    <label class="form-label">
                                                      <input type="checkbox" value="">
                                                      <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
                                                    </label>
                                                  </div>
                                                  <i class="icofont icofont-star text-warning"></i>
                                                </div>
                                              </td>
                                              <td><a href="email-read.html" class="email-name waves-effect">Google Inc</a></td>
                                              <td><a href="email-read.html" class="email-name waves-effect">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a></td>
                                              <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
                                              <td class="email-time">08:01 AM</td>
                                            </tr>
                                            <tr class="unread">
                                              <td>
                                                <div class="check-star">
                                                  <div class="checkbox-fade fade-in-primary checkbox">
                                                    <label class="form-label">
                                                      <input type="checkbox" value="">
                                                      <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
                                                    </label>
                                                  </div>
                                                  <i class="icofont icofont-star text-primary"></i>
                                                </div>
                                              </td>
                                              <td><a href="email-read.html" class="email-name waves-effect">John Doe</a></td>
                                              <td><a href="email-read.html" class="email-name waves-effect">Coming Up Next Week</a></td>
                                              <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
                                              <td class="email-time">13:02 PM</td>
                                            </tr>
                                            <tr class="unread">
                                              <td>
                                                <div class="check-star">
                                                  <div class="checkbox-fade fade-in-primary checkbox">
                                                    <label class="form-label">
                                                      <input type="checkbox" value="">
                                                      <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
                                                    </label>
                                                  </div>
                                                  <i class="icofont icofont-star text-info"></i>
                                                </div>
                                              </td>
                                              <td><a href="email-read.html" class="email-name waves-effect">Sara Soudein</a></td>
                                              <td><a href="email-read.html" class="email-name waves-effect">SVG new updates comes for you</a></td>
                                              <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
                                              <td class="email-time">00:05 AM</td>
                                            </tr>
                                            <tr class="unread">
                                              <td>
                                                <div class="check-star">
                                                  <div class="checkbox-fade fade-in-primary checkbox">
                                                    <label class="form-label">
                                                      <input type="checkbox" value="">
                                                      <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
                                                    </label>
                                                  </div>
                                                  <i class="icofont icofont-star text-danger"></i>
                                                </div>
                                              </td>
                                              <td><a href="email-read.html" class="email-name waves-effect">Rinky Behl</a></td>
                                              <td><a href="email-read.html" class="email-name waves-effect">Photoshop updates are available</a></td>
                                              <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
                                              <td class="email-time">10:01 AM</td>
                                            </tr>
                                            <tr class="read">
                                              <td>
                                                <div class="check-star">
                                                  <div class="checkbox-fade fade-in-primary checkbox">
                                                    <label class="form-label">
                                                      <input type="checkbox" value="">
                                                      <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
                                                    </label>
                                                  </div>
                                                  <i class="icofont icofont-star text-primary"></i>
                                                </div>
                                              </td>
                                              <td><a href="email-read.html" class="email-name waves-effect">Harry John</a></td>
                                              <td><a href="email-read.html" class="email-name waves-effect">New upcoming data available</a></td>
                                              <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
                                              <td class="email-time">11:01 AM</td>
                                            </tr>
                                            <tr class="read">
                                              <td>
                                                <div class="check-star">
                                                  <div class="checkbox-fade fade-in-primary checkbox">
                                                    <label class="form-label">
                                                      <input type="checkbox" value="">
                                                      <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
                                                    </label>
                                                  </div>
                                                  <i class="icofont icofont-star text-danger"></i>
                                                </div>
                                              </td>
                                              <td><a href="email-read.html" class="email-name waves-effect">Hanry Joseph</a></td>
                                              <td><a href="email-read.html" class="email-name waves-effect">SCSS current working for new updates</a></td>
                                              <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
                                              <td class="email-time">12:01 PM</td>
                                            </tr>
                                            <tr class="read">
                                              <td>
                                                <div class="check-star">
                                                  <div class="checkbox-fade fade-in-primary checkbox">
                                                    <label class="form-label">
                                                      <input type="checkbox" value="">
                                                      <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
                                                    </label>
                                                  </div>
                                                  <i class="icofont icofont-star text-primary"></i>
                                                </div>
                                              </td>
                                              <td><a href="email-read.html" class="email-name waves-effect">Liu Koi Yan</a></td>
                                              <td><a href="email-read.html" class="email-name waves-effect">Charts waiting for you</a></td>
                                              <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
                                              <td class="email-time">07:15 AM</td>
                                            </tr>
                                            <tr class="read">
                                              <td>
                                                <div class="check-star">
                                                  <div class="checkbox-fade fade-in-primary checkbox">
                                                    <label class="form-label">
                                                      <input type="checkbox" value="">
                                                      <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
                                                    </label>
                                                  </div>
                                                  <i class="icofont icofont-star text-danger"></i>
                                                </div>
                                              </td>
                                              <td><a href="email-read.html" class="email-name waves-effect">Hanry Joseph</a></td>
                                              <td><a href="email-read.html" class="email-name waves-effect">SCSS current working for new updates</a></td>
                                              <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
                                              <td class="email-time">12:01 PM</td>
                                            </tr>
                                            <tr class="read">
                                              <td>
                                                <div class="check-star">
                                                  <div class="checkbox-fade fade-in-primary checkbox">
                                                    <label class="form-label">
                                                      <input type="checkbox" value="">
                                                      <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
                                                    </label>
                                                  </div>
                                                  <i class="icofont icofont-star text-primary"></i>
                                                </div>
                                              </td>
                                              <td><a href="email-read.html" class="email-name waves-effect">Liu Koi Yan</a></td>
                                              <td><a href="email-read.html" class="email-name waves-effect">Charts waiting for you</a></td>
                                              <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
                                              <td class="email-time">07:15 AM</td>
                                            </tr>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="tab-pane fade" id="e-sent" role="tabpanel">

                                    <div class="mail-body">
                                      <div class="mail-body-header">
                                        <button type="button" class="btn btn-primary btn-xs waves-effect waves-light">
                                          <i class="icofont icofont-exclamation-circle"></i>
                                        </button>
                                        <button type="button" class="btn btn-danger btn-xs waves-effect waves-light">
                                          <i class="icofont icofont-ui-delete"></i>
                                        </button>
                                        <div class="btn-group dropdown-split-primary">
                                          <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="icofont icofont-ui-folder"></i>
                                          </button>
                                          <div class="dropdown-menu">
                                            <a class="dropdown-item waves-effect waves-light" href="#">Action</a>
                                            <a class="dropdown-item waves-effect waves-light" href="#">Another action</a>
                                            <a class="dropdown-item waves-effect waves-light" href="#">Something else</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item waves-effect waves-light" href="#">Separated link</a>
                                          </div>
                                        </div>
                                        <div class="btn-group dropdown-split-primary">
                                          <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            More
                                          </button>
                                          <div class="dropdown-menu">
                                            <a class="dropdown-item waves-effect waves-light" href="#">Action</a>
                                            <a class="dropdown-item waves-effect waves-light" href="#">Another action</a>
                                            <a class="dropdown-item waves-effect waves-light" href="#">Something else</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item waves-effect waves-light" href="#">Separated link</a>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="mail-body-content">
                                        <div class="table-responsive">
                                          <table class="table">

                                            <tr class="read">
                                              <td>
                                                <div class="check-star">
                                                  <div class="checkbox-fade fade-in-primary checkbox">
                                                    <label class="form-label">
                                                      <input type="checkbox" value="">
                                                      <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
                                                    </label>
                                                  </div>
                                                  <i class="icofont icofont-star text-primary"></i>
                                                </div>
                                              </td>
                                              <td><a href="email-read.html" class="email-name waves-effect">Liu Koi Yan</a></td>
                                              <td><a href="email-read.html" class="email-name waves-effect">Charts waiting for you</a></td>
                                              <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
                                              <td class="email-time">07:15 AM</td>
                                            </tr>
                                            <tr class="unread">
                                              <td>
                                                <div class="check-star">
                                                  <div class="checkbox-fade fade-in-primary checkbox">
                                                    <label class="form-label">
                                                      <input type="checkbox" value="">
                                                      <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
                                                    </label>
                                                  </div>
                                                  <i class="icofont icofont-star text-warning"></i>
                                                </div>
                                              </td>
                                              <td><a href="email-read.html" class="email-name waves-effect">Google Inc</a></td>
                                              <td><a href="email-read.html" class="email-name waves-effect">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a></td>
                                              <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
                                              <td class="email-time">08:01 AM</td>
                                            </tr>
                                            <tr class="unread">
                                              <td>
                                                <div class="check-star">
                                                  <div class="checkbox-fade fade-in-primary checkbox">
                                                    <label class="form-label">
                                                      <input type="checkbox" value="">
                                                      <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
                                                    </label>
                                                  </div>
                                                  <i class="icofont icofont-star text-primary"></i>
                                                </div>
                                              </td>
                                              <td><a href="email-read.html" class="email-name waves-effect">John Doe</a></td>
                                              <td><a href="email-read.html" class="email-name waves-effect">Coming Up Next Week</a></td>
                                              <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
                                              <td class="email-time">13:02 PM</td>
                                            </tr>
                                            <tr class="unread">
                                              <td>
                                                <div class="check-star">
                                                  <div class="checkbox-fade fade-in-primary checkbox">
                                                    <label class="form-label">
                                                      <input type="checkbox" value="">
                                                      <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
                                                    </label>
                                                  </div>
                                                  <i class="icofont icofont-star text-info"></i>
                                                </div>
                                              </td>
                                              <td><a href="email-read.html" class="email-name waves-effect">Sara Soudein</a></td>
                                              <td><a href="email-read.html" class="email-name waves-effect">SVG new updates comes for you</a></td>
                                              <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
                                              <td class="email-time">00:05 AM</td>
                                            </tr>
                                            <tr class="unread">
                                              <td>
                                                <div class="check-star">
                                                  <div class="checkbox-fade fade-in-primary checkbox">
                                                    <label class="form-label">
                                                      <input type="checkbox" value="">
                                                      <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
                                                    </label>
                                                  </div>
                                                  <i class="icofont icofont-star text-danger"></i>
                                                </div>
                                              </td>
                                              <td><a href="email-read.html" class="email-name waves-effect">Rinky Behl</a></td>
                                              <td><a href="email-read.html" class="email-name waves-effect">Photoshop updates are available</a></td>
                                              <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
                                              <td class="email-time">10:01 AM</td>
                                            </tr>
                                            <tr class="read">
                                              <td>
                                                <div class="check-star">
                                                  <div class="checkbox-fade fade-in-primary checkbox">
                                                    <label class="form-label">
                                                      <input type="checkbox" value="">
                                                      <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
                                                    </label>
                                                  </div>
                                                  <i class="icofont icofont-star text-primary"></i>
                                                </div>
                                              </td>
                                              <td><a href="email-read.html" class="email-name waves-effect">Harry John</a></td>
                                              <td><a href="email-read.html" class="email-name waves-effect">New upcoming data available</a></td>
                                              <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
                                              <td class="email-time">11:01 AM</td>
                                            </tr>
                                            <tr class="read">
                                              <td>
                                                <div class="check-star">
                                                  <div class="checkbox-fade fade-in-primary checkbox">
                                                    <label class="form-label">
                                                      <input type="checkbox" value="">
                                                      <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
                                                    </label>
                                                  </div>
                                                  <i class="icofont icofont-star text-danger"></i>
                                                </div>
                                              </td>
                                              <td><a href="email-read.html" class="email-name waves-effect">Hanry Joseph</a></td>
                                              <td><a href="email-read.html" class="email-name waves-effect">SCSS current working for new updates</a></td>
                                              <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
                                              <td class="email-time">12:01 PM</td>
                                            </tr>
                                            <tr class="read">
                                              <td>
                                                <div class="check-star">
                                                  <div class="checkbox-fade fade-in-primary checkbox">
                                                    <label class="form-label">
                                                      <input type="checkbox" value="">
                                                      <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
                                                    </label>
                                                  </div>
                                                  <i class="icofont icofont-star text-primary"></i>
                                                </div>
                                              </td>
                                              <td><a href="email-read.html" class="email-name waves-effect">Liu Koi Yan</a></td>
                                              <td><a href="email-read.html" class="email-name waves-effect">Charts waiting for you</a></td>
                                              <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
                                              <td class="email-time">07:15 AM</td>
                                            </tr>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="tab-pane fade" id="e-trash" role="tabpanel">

                                    <div class="mail-body">
                                      <div class="mail-body-header">
                                        <button type="button" class="btn btn-primary btn-xs waves-effect waves-light">
                                          <i class="icofont icofont-exclamation-circle"></i>
                                        </button>
                                        <div class="btn-group dropdown-split-primary">
                                          <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="icofont icofont-ui-folder"></i>
                                          </button>
                                          <div class="dropdown-menu">
                                            <a class="dropdown-item waves-effect waves-light" href="#">Action</a>
                                            <a class="dropdown-item waves-effect waves-light" href="#">Another action</a>
                                            <a class="dropdown-item waves-effect waves-light" href="#">Something else</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item waves-effect waves-light" href="#">Separated link</a>
                                          </div>
                                        </div>
                                        <div class="btn-group dropdown-split-primary">
                                          <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            More
                                          </button>
                                          <div class="dropdown-menu">
                                            <a class="dropdown-item waves-effect waves-light" href="#">Action</a>
                                            <a class="dropdown-item waves-effect waves-light" href="#">Another action</a>
                                            <a class="dropdown-item waves-effect waves-light" href="#">Something else</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item waves-effect waves-light" href="#">Separated link</a>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="mail-body-content">
                                        <div class="table-responsive">
                                          <table class="table">

                                            <tr class="unread">
                                              <td>
                                                <div class="check-star">
                                                  <div class="checkbox-fade fade-in-primary checkbox">
                                                    <label class="form-label">
                                                      <input type="checkbox" value="">
                                                      <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
                                                    </label>
                                                  </div>
                                                  <i class="icofont icofont-star text-danger"></i>
                                                </div>
                                              </td>
                                              <td><a href="email-read.html" class="email-name waves-effect">Rinky Behl</a></td>
                                              <td><a href="email-read.html" class="email-name waves-effect">Photoshop updates are available</a></td>
                                              <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
                                              <td class="email-time">10:01 AM</td>
                                            </tr>
                                            <tr class="read">
                                              <td>
                                                <div class="check-star">
                                                  <div class="checkbox-fade fade-in-primary checkbox">
                                                    <label class="form-label">
                                                      <input type="checkbox" value="">
                                                      <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
                                                    </label>
                                                  </div>
                                                  <i class="icofont icofont-star text-primary"></i>
                                                </div>
                                              </td>
                                              <td><a href="email-read.html" class="email-name waves-effect">Harry John</a></td>
                                              <td><a href="email-read.html" class="email-name waves-effect">New upcoming data available</a></td>
                                              <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
                                              <td class="email-time">11:01 AM</td>
                                            </tr>
                                            <tr class="read">
                                              <td>
                                                <div class="check-star">
                                                  <div class="checkbox-fade fade-in-primary checkbox">
                                                    <label class="form-label">
                                                      <input type="checkbox" value="">
                                                      <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
                                                    </label>
                                                  </div>
                                                  <i class="icofont icofont-star text-danger"></i>
                                                </div>
                                              </td>
                                              <td><a href="email-read.html" class="email-name waves-effect">Hanry Joseph</a></td>
                                              <td><a href="email-read.html" class="email-name waves-effect">SCSS current working for new updates</a></td>
                                              <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
                                              <td class="email-time">12:01 PM</td>
                                            </tr>
                                            <tr class="read">
                                              <td>
                                                <div class="check-star">
                                                  <div class="checkbox-fade fade-in-primary checkbox">
                                                    <label class="form-label">
                                                      <input type="checkbox" value="">
                                                      <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
                                                    </label>
                                                  </div>
                                                  <i class="icofont icofont-star text-primary"></i>
                                                </div>
                                              </td>
                                              <td><a href="email-read.html" class="email-name waves-effect">Liu Koi Yan</a></td>
                                              <td><a href="email-read.html" class="email-name waves-effect">Charts waiting for you</a></td>
                                              <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
                                              <td class="email-time">07:15 AM</td>
                                            </tr>
                                            <tr class="unread">
                                              <td>
                                                <div class="check-star">
                                                  <div class="checkbox-fade fade-in-primary checkbox">
                                                    <label class="form-label">
                                                      <input type="checkbox" value="">
                                                      <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
                                                    </label>
                                                  </div>
                                                  <i class="icofont icofont-star text-warning"></i>
                                                </div>
                                              </td>
                                              <td><a href="email-read.html" class="email-name waves-effect">Google Inc</a></td>
                                              <td><a href="email-read.html" class="email-name waves-effect">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a></td>
                                              <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
                                              <td class="email-time">08:01 AM</td>
                                            </tr>
                                            <tr class="unread">
                                              <td>
                                                <div class="check-star">
                                                  <div class="checkbox-fade fade-in-primary checkbox">
                                                    <label class="form-label">
                                                      <input type="checkbox" value="">
                                                      <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
                                                    </label>
                                                  </div>
                                                  <i class="icofont icofont-star text-primary"></i>
                                                </div>
                                              </td>
                                              <td><a href="email-read.html" class="email-name waves-effect">John Doe</a></td>
                                              <td><a href="email-read.html" class="email-name waves-effect">Coming Up Next Week</a></td>
                                              <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
                                              <td class="email-time">13:02 PM</td>
                                            </tr>

                                            <tr class="read">
                                              <td>
                                                <div class="check-star">
                                                  <div class="checkbox-fade fade-in-primary checkbox">
                                                    <label class="form-label">
                                                      <input type="checkbox" value="">
                                                      <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
                                                    </label>
                                                  </div>
                                                  <i class="icofont icofont-star text-primary"></i>
                                                </div>
                                              </td>
                                              <td><a href="email-read.html" class="email-name waves-effect">Liu Koi Yan</a></td>
                                              <td><a href="email-read.html" class="email-name waves-effect">Charts waiting for you</a></td>
                                              <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
                                              <td class="email-time">07:15 AM</td>
                                            </tr>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!-- Right-side section end -->
                            </div>
                          </div>
                          <!-- Email-card end -->
                        </div>
                      </div>
                      <!-- Page-body start -->
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
<!-- Custom js -->
<script src="<?= BASE_URL; ?>/files/assets/js/pcoded.min.js"></script>
<script src="<?= BASE_URL; ?>/files/assets/js/vertical/vertical-layout.min.js"></script>
<script src="<?= BASE_URL; ?>/files/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="<?= BASE_URL; ?>/files/assets/js/script.js"></script>
</body>

</html>
