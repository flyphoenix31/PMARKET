<?php
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
      <!-- Google font-->     
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet"><link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">
      <!-- Required Fremwork -->
      <link rel="stylesheet" type="text/css" href="<?= BASE_URL; ?>/files/bower_components/bootstrap/css/bootstrap.min.css">
      <!-- waves.css -->
      <link rel="stylesheet" href="<?= BASE_URL; ?>/files/assets/pages/waves/css/waves.min.css" type="text/css" media="all"><!-- feather icon --> <link rel="stylesheet" type="text/css" href="<?= BASE_URL; ?>/files/assets/icon/feather/css/feather.css">
      <!-- themify-icons line icon -->
      <link rel="stylesheet" type="text/css" href="<?= BASE_URL; ?>/files/assets/icon/themify-icons/themify-icons.css">
      <!-- ico font -->
      <link rel="stylesheet" type="text/css" href="<?= BASE_URL; ?>/files/assets/icon/icofont/css/icofont.css">
      <!-- Font Awesome -->
      <link rel="stylesheet" type="text/css" href="<?= BASE_URL; ?>/files/assets/icon/font-awesome/css/font-awesome.min.css">
      <!-- Style.css -->
      <link rel="stylesheet" type="text/css" href="<?= BASE_URL; ?>/files/assets/css/style.css"><link rel="stylesheet" type="text/css" href="<?= BASE_URL; ?>/files/assets/css/pages.css">
      
      <link rel="stylesheet" href="<?= BASE_URL; ?>/files/captcha/css/demo-style.css"> 
  </head>

  <body themebg-pattern="theme1">
  <!-- Pre-loader start -->
  <div class="theme-loader">
      <div class="loader-track">
          <div class="preloader-wrapper">
              <div class="spinner-layer spinner-blue">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
              <div class="spinner-layer spinner-red">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
            
              <div class="spinner-layer spinner-yellow">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
            
              <div class="spinner-layer spinner-green">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Pre-loader end -->
  <section class="login-block">
        <!-- Container-fluid starts -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Authentication card start -->
                    <form class="md-float-material form-material">
                        <div class="text-center">
                            <img src="<?= BASE_URL; ?>/files/assets/images/logo.png" alt="logo.png">
                        </div>
                        <div class="auth-box card">
                            <div class="card-block">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-center txt-primary">Sign up</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group form-primary">
                                            <input type="text" name="user-name" class="form-control" required>
                                            <span class="form-bar"></span>
                                            <label class="form-label float-label">Username *</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-primary">
                                            <input type="text" name="email" class="form-control" required>
                                            <span class="form-bar"></span>
                                            <label class="form-label float-label">Email Address *</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-primary">
                                            <input type="password" name="password" class="form-control" required>
                                            <span class="form-bar"></span>
                                            <label class="form-label float-label">Password *</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-primary">
                                            <input type="password" name="confirm-password" class="form-control" required>
                                            <span class="form-bar"></span>
                                            <label class="form-label float-label">Confirm Password *</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-primary">
                                            <input type="text" name="phoneext" class="form-control">
                                            <span class="form-bar"></span>
                                            <label class="form-label float-label">Phone Ext</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-primary">
                                            <input type="text" name="moblie" class="form-control">
                                            <span class="form-bar"></span>
                                            <label class="form-label float-label">Mobile</label>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="form-group form-primary">
                                        <div class="captcha mt-1">
                                            <img src="demo_captcha.php" class="imgcaptcha" alt="captcha"  />
                                            <img src="<?= BASE_URL; ?>/files/captcha/images/refresh.png" alt="reload" class="refresh" />
                                        </div>
                                    </div>
                                    <div class="form-group form-primary">
                                        <input type="text" name="captcha" class="form-control">
                                        <span class="form-bar"></span>
                                        <label class="form-label float-label">Captcha</label>
                                    </div>
                                </div>
                                <div class="row m-t-25 text-start">
                                    <div class="col-md-12">
                                        <div class="checkbox-fade fade-in-primary">
                                            <label class="form-label">
                                                <input type="checkbox" value="">
                                                <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                                <span class="text-inverse">I read and accept <a href="#">Terms &amp; Conditions.</a></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <div class="d-grid">
                                            <button class="btn btn-primary btn-md waves-effect text-center m-b-20">Sign up now</button>
                                        </div>
                                    </div>
                                </div>
                                <p class="text-inverse text-start">Already have an account?<a href="signin.php"> <b>Sign in here </b></a></p>
                                <hr/>
                                <div class="row">
                                    <div class="col-md-10">
                                        <p class="text-inverse text-start m-b-0">Thank you.</p>
                                        <p class="text-inverse text-start"><a href="index.html"><b>Back to website</b></a></p>
                                    </div>
                                    <div class="col-md-2">
                                        <img src="<?= BASE_URL; ?>/files/assets/images/auth/Logo-small-bottom.png" alt="small-logo.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- Authentication card end -->
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>
    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
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
<!-- i18next.min.js -->
<script type="text/javascript" src="<?= BASE_URL; ?>/files/bower_components/i18next/js/i18next.min.js"></script>
<script type="text/javascript" src="<?= BASE_URL; ?>/files/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js"></script>
<script type="text/javascript" src="<?= BASE_URL; ?>/files/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js"></script>
<script type="text/javascript" src="<?= BASE_URL; ?>/files/bower_components/jquery-i18next/js/jquery-i18next.min.js"></script>
<script type="text/javascript" src="<?= BASE_URL; ?>/files/assets/js/common-pages.js"></script>
</body>

</html>


<script language="javascript">
$(document).ready(function(){
    $(".refresh").click(function () {
        $(".imgcaptcha").attr("src","demo_captcha.php?_="+((new Date()).getTime()));
        
    });
});
</script>	