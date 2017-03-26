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
            	<h1>Gallery</h1>
                <div class="bread-crumb"><a href="index-2.html">Home</a> / <a href="#" class="current">Gallery</a></div>
            </div>
        </div>
    </section>
    
    
    
    <!--Gallery Section-->
    <section class="gallery-section full-width" id="gallery-section">
    	<div class="auto-container">
        
        <div class="filters">
            	<ul class="filter-tabs clearfix anim-3-all">
                    
                
            <?php
                include('admin/connection/dbConnection.php');
                $query = "SELECT * FROM categories";
                $result = $conn->query($query); 
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                        echo '<li class="filter" data-role="button" data-filter=".bedroom">'.$row["category_name"].'</li>';
                    }
                }
                $conn->close();
            ?>
        </ul>
    </div>
        </div>
        

    <div id="home-image" style="display:none">

        <div class="images-container">
            <div class="filter-list clearfix" id="image-content">
                
                <!--Image Box-->
                <?php
                      #include database connection file
                      include('admin/connection/dbConnection.php');
                      
                      #query
                      $q="select * from gallery where category = 'Home'";
                      $result=$conn->query($q);
                     if($result->num_rows>0){ 
                    
                    while($row=$result->fetch_assoc()){
					echo'<div class="image-box mix mix_all living-room kitchen garage">
                    <div class="inner-box ">
                        <figure class="image"><a href="images/'.$row['image_path'].'" class="lightbox-image">
                        <img src="images/'.$row['image_path'].'" alt="" style="height:250px;"></a></figure>
                        <a href="images/'.$row['image_path'].'" class="zoom-btn lightbox-image"  style=""><span class="icon flaticon-add30"></span></a>
                    </div>
                </div>';
                }
                  
                }
                  $conn->close();   
                  ?>
                
           
            </div>
        </div>
    </div>

    <div id="office-image" style="display:none">

        <div class="images-container">
            <div class="filter-list clearfix" id="image-content">
                <!--Image Box-->
                <?php
                      #include database connection file
                      include('admin/connection/dbConnection.php');
                      #query
                      $q="select * from gallery where category = 'Office'";
                      $result=$conn->query($q);
                     if($result->num_rows>0){ 
                    
                    while($row=$result->fetch_assoc()){
                      
					echo'<div class="image-box mix mix_all living-room kitchen garage">
                    <div class="inner-box ">
                        <figure class="image"><a href="images/'.$row['image_path'].'" class="lightbox-image">
                        <img src="images/'.$row['image_path'].'" alt="" style="width: 350px;height:200px;"></a></figure>
                        <a href="images/'.$row['image_path'].'" class="zoom-btn lightbox-image"  style=""><span class="icon flaticon-add30"></span></a>
                    </div>
                </div>';
                }
                  
                }
                  $conn->close();   
                  ?>
                
           
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
<script src="js/gallery.js"></script>


</body>

</html>
