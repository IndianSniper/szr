
<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<title>SZR Interiors | Portfolio</title>
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
            	<h1>Portfolio</h1>
                <div class="bread-crumb"><a href="index-2.html">Home</a> / <a href="#" class="current">Portfolio</a></div>
            </div>
        </div>
    </section>
    
    
    
    <!--Sidebar Page-->
    <div class="sidebar-page">
    	<div class="auto-container">
        
        	<div class="row clearfix">
            	
                <!--Content Side-->	
                <div class="col-lg-9 col-md-8 col-sm-7 col-xs-12">
                    <section class="blog-container">
                        <h4><i>We are privileged to serve ....<i></h4>
                        <br/>
                        <!--portfolio Post-->
                        <?php
                      #include database connection file
                      include('admin/connection/dbConnection.php');
                      
                      #query
                      $q="select * from portfolio";
                      $result=$conn->query($q);
                     if($result->num_rows>0){ 
                    
                    while($row=$result->fetch_assoc()){
					echo'<div class="blog-post wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <article class="inner-box">
                            	<!--Image-->
                                <figure class="image-box">
                                    <a href="#"><img src="images/'.$row['image_path'].'" alt=""></a>
                                    <div class="post-options">
											<a href="#" class="plus-icon img-circle"><span class="icon flaticon-news37"></span></a>
											<a href="#" class="heart-icon img-circle"><span class="icon fa fa-heart"></span></a>
										</div>
                                </figure>
                                <!--Lower Content-->
                                <div class="lower-part">
                                    <div class="post-title"><h3><a href="#">'.$row['portfolio_name'].'</a></h3></div>
                                </div>
                            </article>
                        </div>';
                    }
                  
                }
                  $conn->close();   
                  ?>
                    </section>
                    
                    <br>
                
                    
                </div>
                <!--Content Side-->
                
                
            </div>
            
            
        </div>
    </div>
    
    
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
