<?php 
session_start();
ob_start();
?>

<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">

  <title>SZR Admin Panel</title>

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
<body>


<nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega" role="navigation">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle hamburger hamburger-close navbar-toggle-left hided"
      data-toggle="menubar">
        <span class="sr-only">Toggle navigation</span>
        <span class="hamburger-bar"></span>
      </button>
      <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-collapse"
      data-toggle="collapse">
        <i class="icon wb-more-horizontal" aria-hidden="true"></i>
      </button>
      <div class="navbar-brand navbar-brand-center site-gridmenu-toggle" data-toggle="gridmenu">
        <img class="navbar-brand-logo" src="../images/logo.PNG" title="Raj Graphic">
        <span class="navbar-brand-text">SZR Interiors</span>
      </div>
      <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-search"
      data-toggle="collapse">
        <span class="sr-only">Toggle Search</span>
        <i class="icon wb-search" aria-hidden="true"></i>
      </button>
    </div>

    <div class="navbar-container container-fluid">
      <!-- Navbar Collapse -->
      <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
        <!-- Navbar Toolbar -->
        <ul class="nav navbar-toolbar">
          <li class="hidden-float" id="toggleMenubar">
            <a data-toggle="menubar" href="#" role="button">
              <i class="icon hamburger hamburger-arrow-left">
                  <span class="sr-only">Toggle menubar</span>
                  <span class="hamburger-bar"></span>
                </i>
            </a>
          </li>
          <li class="hidden-xs" id="toggleFullscreen">
            <a class="icon icon-fullscreen" data-toggle="fullscreen" href="#" role="button">
              <span class="sr-only">Toggle fullscreen</span>
            </a>
          </li>
          <li class="hidden-float">
            <a class="icon wb-search" data-toggle="collapse" href="#" data-target="#site-navbar-search"
            role="button">
              <span class="sr-only">Toggle Search</span>
            </a>
          </li>
          
        </ul>
        <!-- End Navbar Toolbar -->

        <!-- Navbar Toolbar Right -->
        <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
          
          <li class="dropdown">
            <a class="navbar-avatar dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false"
            data-animation="scale-up" role="button">
              <span class="avatar avatar-online">
                <img src="global/portraits/5.jpg" alt="...">
                <i></i>
              </span>
            </a>
            <ul class="dropdown-menu" role="menu">
              <li role="presentation">
                <a href="javascript:void(0)" role="menuitem"><i class="icon wb-user" aria-hidden="true"></i> <?php echo $_SESSION['user_name'] ?></a>
              </li>
              
              <li class="divider" role="presentation"></li>
              <li role="presentation">
                <a href="logout.php" role="menuitem"><i class="icon wb-power" aria-hidden="true"></i> Logout</a>
              </li>
            </ul>
          </li>
          
        </ul>
        <!-- End Navbar Toolbar Right -->
      </div>
      <!-- End Navbar Collapse -->

      <!-- Site Navbar Seach -->
      <div class="collapse navbar-search-overlap" id="site-navbar-search">
        <form role="search">
          <div class="form-group">
            <div class="input-search">
              <i class="input-search-icon wb-search" aria-hidden="true"></i>
              <input type="text" class="form-control" name="site-search" placeholder="Search...">
              <button type="button" class="input-search-close icon wb-close" data-target="#site-navbar-search"
              data-toggle="collapse" aria-label="Close"></button>
            </div>
          </div>
        </form>
      </div>
      <!-- End Site Navbar Seach -->
    </div>
  </nav>
  <div class="site-menubar">
    <div class="site-menubar-body">
      <div>
        <div>
          <ul class="site-menu">
            <li class="site-menu-category">Menu</li>
            <li class="site-menu-item has-sub active open">
              <a href="javascript:void(0)">
                <i class="site-menu-icon wb-dashboard" aria-hidden="true"></i>
                <span class="site-menu-title">Settings</span>
                <div class="site-menu-badge">
                  <span class="badge badge-success">0</span>
                </div>
              </a>
              <ul class="site-menu-sub">
                <li class="site-menu-item" >
                  <a class="animsition-link"  href="user_settings.php">
                    <span class="site-menu-title">Users</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" id="aboutus" href="contactus_settings.php">
                    <span class="site-menu-title">Contact</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" id="services" href="gallery_settings.php">
                    <span class="site-menu-title">Gallery</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="slider_settings.php">
                    <span class="site-menu-title">Slider</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="clientele_settings.php">
                    <span class="site-menu-title">Clientele</span>
                  </a>
                </li>
              </ul>
            </li>
              
		  </ul>
        </div>    
      </div>
    </div>
</div>


  