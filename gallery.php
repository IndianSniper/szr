<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>SZR Interiors | Gallery</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/revolution-slider.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="css/responsive.css" rel="stylesheet">
<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>
<div class="page-wrapper">
 	
    <!--include header-->
   <?php include('header.php'); ?>
    
    
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/page-title-bg-1.jpg);">
    	<div class="auto-container">
        	<div class="content-box">
            	<h1>Gallery Full Width</h1>
                <div class="bread-crumb"><a href="index-2.html">Home</a> / <a href="#" class="current">Gallery</a></div>
            </div>
        </div>
    </section>
    
    
    
    <!--Gallery Section-->
    <section class="gallery-section full-width" id="gallery-section">
    	<div class="auto-container">
        
            <!--Section Title-->
            <div class="sec-title">
                <div class="text"><p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words</p></div>
            </div>
            
            
        </div>
        
        <div class="images-container">
            <div class="filter-list clearfix">
                
                <!--Image Box-->
                 <?php
                      #include database connection file
                      include('admin/connection/dbConnection.php');
                      
                      #query
                      $q="select * from gallery";
                      $result=$conn->query($q);
                     if($result->num_rows>0){ 
                    
                    while($row=$result->fetch_assoc()){
					echo'<div class="image-box mix mix_all living-room kitchen garage">
                    <div class="inner-box">
                        <figure class="image"><a href="images/'.$row['image_path'].'" class="lightbox-image">
                        <img src="'.$row['image_path'].'" alt=""></a></figure>
                        <a href='.$row['image_path'].'" class="zoom-btn lightbox-image"><span class="icon flaticon-add30"></span></a>
                    </div>
                </div>';
                }
                  
                }
                  $conn->close();   
                  ?>
                
           
            </div>
        </div>
        
        
    </section>
    
    <!--Intro Section-->
    <section class="intro-section">
    	<div class="auto-container">
        	<div class="outer-box clearfix">
            	<span class="anim-image wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1000ms"><img src="images/logo-2.png" alt=""></span>
                <div class="col-md-9 col-sm-7 col-xs-12">
                    <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled .</p>
                </div>
                <div class="col-md-3 col-sm-5 col-xs-12 text-right">
                	<a href="#" class="theme-btn btn-style-two">CONTACT NOW</a>
                </div>
            </div>
        </div>
    </section>
    
    
    
    <!--Main Footer-->
    <footer class="main-footer">
    	<div class="auto-container">
        	
               <!--include header-->
                <?php include('footer.php'); ?>
            
        </div>
    </footer>
    
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top"><span class="fa fa-arrow-up"></span></div>

<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.mixitup.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/wow.js"></script>
<script src="js/script.js"></script>


</body>

</html>
