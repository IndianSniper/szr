<?php
session_start();
if(isset($_SESSION['user_id'])){
header("Location: http://localhost/szr/admin/user_settings.php");
}
?>
<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">

  <title>Login | SZR Admin panel</title>

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
  <link rel="stylesheet" href="assets/examples/css/pages/login-v3.min09a2.css?v2.1.0">

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
<body class="page-login-v3 layout-full">
  <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->


  <!-- Page -->
  <div class="page animsition vertical-align text-center" data-animsition-in="fade-in"
  data-animsition-out="fade-out">
    <div class="page-content vertical-align-middle">
      <div class="panel">
        <div class="panel-body">
          <div class="brand">
            <img class="brand-img" src="../images/logo.PNG" alt="...">
           
          </div>
          
            <div class="form-group form-material floating">
              <input type="text" id="user_id" class="form-control" name="user_id" />
              <label class="floating-label">Username</label>
            </div>
            <div class="form-group form-material floating">
              <input type="password" id="password" class="form-control" name="password" />
              <label class="floating-label">Password</label>
            </div>
             <button type="submit" id="login" class="btn btn-primary btn-block btn-lg margin-top-40">Sign in</button>
             <br/>
            <div class="form-group clearfix">
              <a class="pull-right" href="forgot-password.php">Forgot password?</a>
            </div>
           <div id="error">
           <?php
           if(isset($_COOKIE['NOT_LOGGED_IN'])){ 
           echo "<b>".$_COOKIE['NOT_LOGGED_IN']."</b>";
           unset($_COOKIE['NOT_LOGGED_IN']);
           setcookie("NOT_LOGGED_IN",null,-1,"/");
           }
           elseif(isset($_COOKIE['LOGGED_OUT'])){ 
           echo "<b>".$_COOKIE['LOGGED_OUT']."</b>";
           unset($_COOKIE['LOGGED_OUT']);
           setcookie("LOGGED_OUT",null,-1,"/");
           }
           ?>
           </div>
          
        </div>
      </div>

      <footer class="page-copyright page-copyright-inverse">
        <p>A project by <a href="http://anmtechsolutions.com" target="_blank">ANM</a></p>
        <p>SZR © 2017. All RIGHT RESERVED.</p>
      
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
  
  <script src="global/vendor/intro-js/intro.min.js"></script>
  <script src="global/vendor/screenfull/screenfull.min.js"></script>


  <!-- Plugins For This Page -->
  <script src="global/vendor/jquery-placeholder/jquery.placeholder.min.js"></script>

  <!-- Scripts -->
  <script src="global/js/core.min.js"></script>
  <script src="assets/js/site.min.js"></script>


  <script src="global/js/components/asscrollable.min.js"></script>
  <script src="global/js/components/animsition.min.js"></script>


  <script src="global/js/components/material.min.js"></script>

  <script>
    (function(document, window, $) {
      'use strict';

      var Site = window.Site;
      $(document).ready(function() {
        Site.run();
      });
    })(document, window, jQuery);
    
   $(document).ready(function(){
    $("#login").click(function() {
        var user_id=$('#user_id').val();
        var password=$('#password').val();
        $.post('auth/adminuser.php', {'user_id': user_id,'password': password},function(data){
          if(data['status']=="false")
          $("#error").html("<b>Login failed! Wrong user id or password.</b>");
          else{
          $("#error").html("<b>Login Successfull! Welcome.</b>");
            window.location.replace("http://localhost/szr/admin/user_settings.php");
          }
        });
            
    });
    
    $(document).keypress(function(e) {
        if(e.which == 13) {
                var user_id=$('#user_id').val();
        var password=$('#password').val();
        $.post('auth/adminuser.php', {'user_id': user_id,'password': password},function(data){
          if(data['status']=="false")
          $("#error").html("<b>Login failed! Wrong user id or password.</b>");
          else{
          $("#error").html("<b>Login Successfull! Welcome.</b>");
            window.location.replace("http://localhost/szr/admin/user_settings.php");
          }
        });
        }
    });
  });
   
   
 
  </script>


</body>


</html>