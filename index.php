<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<title>SZR Interiors | Homepage </title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/revolution-slider.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="css/responsive.css" rel="stylesheet">
<script src="https://use.fontawesome.com/1b22b0f990.js"></script>
<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>
<div class="page-wrapper">
 	
    <!--include header-->
    <?php include('header.php'); ?>
    
    <!--Main Slider-->
    <section class="main-slider" id="slider-section">
    	
        <div class="tp-banner-container">
            <div class="tp-banner">
                <ul>
                <?php
                      #include database connection file
                      include('admin/connection/dbConnection.php');
                      
                      #query
                      $q="select * from slider";
                      $result=$conn->query($q);
                     if($result->num_rows>0){ 
                    
                    while($row=$result->fetch_assoc()){
					echo'<li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="images/'.$row['image_path'].'"  data-saveperformance="off"  data-title="We are Awsome">
                    <img src="images/'.$row['image_path'].'"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"> 
                    
                    <div class="tp-caption lfl tp-resizeme"
                    data-x="left" data-hoffset="15"
                    data-y="center" data-voffset="0"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"
                    style="z-index: 4; max-width: auto; max-height: 400; white-space: nowrap;">
                    	<div class="bg-green curve-right">
                        	<h3>'.$row['slider_name'].'</h3>
                            <span class="curve"></span>
                        </div>
                    </div>
                    
                    </li>';
                    }
                  
                }
                  $conn->close();   
                  ?>     
                    
                    
                    
                </ul>
                
            	<div class="tp-bannertimer"></div>
            </div>
        </div>
    </section>
    
    

    <!--Services Section-->
    <section class="gallery-section full-width">
    	<div class="auto-container">
        
            <!--Section Title-->
            <div class="sec-title">
                <h2><span class="theme_color">Services</span></h2>
                <div class="separator small-separator"></div>
                
            </div>
            
            
        </div>
        <div class="auto-container">
            <div class="services-outer">
                <div class="row clearfix">
                    
                    <!--Column-->
                    <article class="col-md-4 col-sm-6 col-xs-12 column wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                        <div class="icon-left"><span class="icon flaticon-check52"></span><span class="number">1</span></div>
                            <div class="content">
                             <!--i class="fa fa-building fa-5x" aria-hidden="true"></i-->
                            <h3>Complete Designing & <br/>Turnkey Solutions </h3>
                            </div>
                        </div>
                    </article>
                    
                    <!--Column-->
                    <article class="col-md-4 col-sm-6 col-xs-12 column wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                        <div class="icon-left"><span class="icon flaticon-check52"></span><span class="number">1</span></div>
                            <div class="content">
                            <!--i class="fa fa-clock-o fa-5x" aria-hidden="true"></i-->
                                <h3>Timely Completion</h3>
                            </div>
                        </div>
                    </article>
                    
                    <!--Column-->
                    <article class="col-md-4 col-sm-6 col-xs-12 column wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                        <div class="icon-left"><span class="icon flaticon-check52"></span><span class="number">1</span></div>
                            <div class="content">
                            <!--i class="fa fa-handshake-o fa-5x" aria-hidden="true"></i-->
                                <h3>Co-ordination with contractors, <br/>supervising of work being executed.</h3>
                            </div>
                        </div>
                    </article>
                    
                </div>
                <div class="row clearfix">
                    
                    <!--Column-->
                    <article class="col-md-4 col-sm-6 col-xs-12 column wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                        <div class="icon-left"><span class="icon flaticon-check52"></span><span class="number">1</span></div>
                            <div class="content">
                             <!--i class="fa fa-cogs fa-5x" aria-hidden="true"></i-->
                            <h3>HVAC</h3>
                            </div>
                        </div>
                    </article>
                    
                    <!--Column-->
                    <article class="col-md-4 col-sm-6 col-xs-12 column wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                        <div class="icon-left"><span class="icon flaticon-check52"></span><span class="number">1</span></div>
                            <div class="content">
                            <!--i class="fa fa-wrench fa-5x" aria-hidden="true"></i-->
                                <h3>Designing of Electrical, <br/>Telecommunication & Data services</h3>
                            </div>
                        </div>
                    </article>
                    
                    <!--Column-->
                    <article class="col-md-4 col-sm-6 col-xs-12 column wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                        <div class="icon-left"><span class="icon flaticon-check52"></span><span class="number">1</span></div>
                            <div class="content">
                            <!--i class="fa fa-line-chart fa-5x" aria-hidden="true"></i-->
                                <h3>Project Optimization through <br/>material selection & scheduling </h3>
                            </div>
                        </div>
                    </article>
                    
                </div>
            </div>
        </div>
        
        
    </section>
    
    <!--Intro Section-->
    <section class="intro-section">
    	<div class="auto-container">
        	<div class="outer-box clearfix">
            	<span class="anim-image wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1000ms"><img src="images/logo.png" alt=""></span>
                <div class="col-md-9 col-sm-7 col-xs-12">
                    <p>We are everywhere....</p>
                    <p>Indian Cities covered by SZR Interiors.</p>
                </div>
            </div>
        </div>
    </section>
    <!--Map Section-->
    <section class="map-section">
    	<div class="map-container" id="map"></div>
    </section>
    
    
    
    <!--Contact Section-->
    <section class="default-section faded-section contact-section" style="background-image:url(images/background/contact-bg.jpg);">
    	<div class="auto-container">
            <!--Separator-->
            <div class="separator big-separator"></div>
            
            <!--include footer-->
            <?php include('footer.php'); ?>

            
        </div>
    </section>
    
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top"><span class="fa fa-arrow-up"></span></div>

<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/revolution.min.js"></script>
<script src="js/jquery.mixitup.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/owl.js"></script>
<script src="js/maps.js"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKVsdYunrKRCicyhnP0FdeHufqht5qIVQ&callback=initMap">
</script>
<script src="js/validate.js"></script>
<script src="js/wow.js"></script>
<script src="js/script.js"></script>



</body>

</html>
