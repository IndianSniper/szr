<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">

  <title>Forgot password | Raj Graphic Admin panel</title>

  <link rel="apple-touch-icon" href="../images/logo.PNG">
  <link rel="shortcut icon" href="../images/logo.PNG">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="global/css/bootstrap.min09a2.css?v2.1.0">
  <link rel="stylesheet" href="global/css/bootstrap-extend.min09a2.css?v2.1.0">
  <link rel="stylesheet" href="assets/css/site.min09a2.css?v2.1.0">


  <!-- Plugins -->
  <link rel="stylesheet" href="global/vendor/animsition/animsition.min09a2.css?v2.1.0">
  <link rel="stylesheet" href="global/vendor/asscrollable/asScrollable.min09a2.css?v2.1.0">
  <link rel="stylesheet" href="global/vendor/switchery/switchery.min09a2.css?v2.1.0">
  <link rel="stylesheet" href="global/vendor/intro-js/introjs.min09a2.css?v2.1.0">
  <link rel="stylesheet" href="global/vendor/slidepanel/slidePanel.min09a2.css?v2.1.0">
  <link rel="stylesheet" href="global/vendor/flag-icon-css/flag-icon.min09a2.css?v2.1.0">

  <!-- Page -->
  <link rel="stylesheet" href="assets/examples/css/pages/forgot-password.min09a2.css?v2.1.0">

  <!-- Fonts -->
  <link rel="stylesheet" href="global/fonts/web-icons/web-icons.min09a2.css?v2.1.0">
  <link rel="stylesheet" href="global/fonts/brand-icons/brand-icons.min09a2.css?v2.1.0">
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>


  <!--[if lt IE 9]>
    <script src="global/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->

  <!--[if lt IE 10]>
    <script src="global/vendor/media-match/media.match.min.js"></script>
    <script src="global/vendor/respond/respond.min.js"></script>
    <![endif]-->

  <!-- Scripts -->
  <script src="global/vendor/modernizr/modernizr.min.js"></script>
  <script src="global/vendor/breakpoints/breakpoints.min.js"></script>
  <script>
    Breakpoints();
  </script>
</head>
<body class="page-forgot-password layout-full">
  <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->


  <!-- Page -->
  <div class="page animsition vertical-align text-center" data-animsition-in="fade-in"
  data-animsition-out="fade-out">
    <div class="page-content vertical-align-middle">
      <h2>Forgot Your Password ?</h2>
      <p>Input your registered email to reset your password</p>

      
        <div class="form-group">
          <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" autocomplete="off">
        </div>
        <div class="form-group">
          <button type="submit" id="email_verification" class="btn btn-primary btn-block">Get password reset link</button>
        </div>
        
      
      <div id="error_email"></div>
      <footer class="page-copyright">
        <p>Raj Graphic</p>
        <p>© 2016. All RIGHT RESERVED.</p>
        
      </footer>
    </div>
  </div>
  <!-- End Page -->


  <!-- Core  -->
  <script src="global/vendor/jquery/jquery.min.js"></script>
  <script src="global/vendor/bootstrap/bootstrap.min.js"></script>
  <script src="global/vendor/animsition/animsition.min.js"></script>
  <script src="global/vendor/asscroll/jquery-asScroll.min.js"></script>
  <script src="global/vendor/mousewheel/jquery.mousewheel.min.js"></script>
  <script src="global/vendor/asscrollable/jquery.asScrollable.all.min.js"></script>
  <script src="global/vendor/ashoverscroll/jquery-asHoverScroll.min.js"></script>

  <!-- Plugins -->
  <script src="global/vendor/switchery/switchery.min.js"></script>
  <script src="global/vendor/intro-js/intro.min.js"></script>
  <script src="global/vendor/screenfull/screenfull.min.js"></script>
  <script src="global/vendor/slidepanel/jquery-slidePanel.min.js"></script>

  <!-- Scripts -->
  <script src="global/js/core.min.js"></script>
  <script src="assets/js/site.min.js"></script>

  <script src="assets/js/sections/menu.min.js"></script>
  <script src="assets/js/sections/menubar.min.js"></script>
  <script src="assets/js/sections/gridmenu.min.js"></script>
  <script src="assets/js/sections/sidebar.min.js"></script>

  <script src="global/js/configs/config-colors.min.js"></script>
  <script src="assets/js/configs/config-tour.min.js"></script>

  <script src="global/js/components/asscrollable.min.js"></script>
  <script src="global/js/components/animsition.min.js"></script>
  <script src="global/js/components/slidepanel.min.js"></script>
  <script src="global/js/components/switchery.min.js"></script>

  <!--script for validation-->
  <script src="js/validation.js"></script>

  <script>
    (function(document, window, $) {
      'use strict';

      var Site = window.Site;
      $(document).ready(function() {
        Site.run();
      });
    })(document, window, jQuery);
  </script>


</body>

</html>