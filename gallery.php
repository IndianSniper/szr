<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>SZR Interiors | Gallery</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/revolution-slider.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/gallery.css" rel="stylesheet">
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
                    <ul class="filter-tabs anim-3-all">
                        <?php
                            include('admin/connection/dbConnection.php');
                            $query = "SELECT * FROM categories";
                            $result = $conn->query($query); 
                            if($result->num_rows > 0){
                                while($row = $result->fetch_assoc()){
                                    echo '<li class="inactive-selection" id="'.$row["category_name"].'">'.$row["category_name"].'</li>';
                                }
                            }
                            $conn->close();
                        ?>
                    </ul>
                </div>
            </div>

        
    <div id="residential-image" style="display: none">
        <div class="row">
                
                <!--Image Box-->
                <?php
                    #include database connection file
                    include('admin/connection/dbConnection.php'); 
                    #query
                     $q="select * from gallery where category = 'Residential'";
                     $result=$conn->query($q);
                     if($result->num_rows>0){ 
                        while($row=$result->fetch_assoc()){
                            echo'<div class="col-sm-4 col-md-3 img-hover dumbeldore" id="'.$row['id'].'">
                                    <a href="" class="" data-toggle="modal" data-target="#residenceImageModal">
                                    <img src="images/'.$row['image_path'].'" class="img-thumbnail" alt="" style="height:250px; width:100%"></a>          
                                </div>';
                        }
                    }
                   $conn->close(); 
                ?>
        </div>
    </div>
    <div id="retail-image" style="display: none">
        <div class="row">
                
                <!--Image Box-->
                <?php
                    #include database connection file
                    include('admin/connection/dbConnection.php'); 
                    #query
                     $q="select * from gallery where category = 'Retail'";
                     $result=$conn->query($q);
                     if($result->num_rows>0){ 
                        while($row=$result->fetch_assoc()){
                            echo'<div class="col-sm-4 col-md-3 img-hover dumbeldore" id="'.$row['id'].'">
                                    <a href="" class="" data-toggle="modal" data-target="#retailImageModal">
                                    <img src="images/'.$row['image_path'].'" class="img-thumbnail" alt="" style="height:250px; width:100%"></a>          
                                </div>';
                        }
                    }
                   $conn->close(); 
                ?>
        </div>
    </div>
    <div id="commercial-image" style="display: none">
        <div class="row">
                
                <!--Image Box-->
                <?php
                    #include database connection file
                    include('admin/connection/dbConnection.php'); 
                    #query
                     $q="select * from gallery where category = 'Commercial'";
                     $result=$conn->query($q);
                     if($result->num_rows>0){ 
                        while($row=$result->fetch_assoc()){
                            echo'<div class="col-sm-4 col-md-3 img-hover dumbeldore" id="'.$row['id'].'">
                                    <a href="" class="" data-toggle="modal" data-target="#residenceImageModal">
                                    <img src="images/'.$row['image_path'].'" class="img-thumbnail" alt="" style="height:250px; width:100%"></a>          
                                </div>';
                        }
                    }
                   $conn->close(); 
                ?>
        </div>
    </div>

        <!-- Modal -->
    <div id="residenceImageModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
                    <!--<h4 class="modal-title">Modal Header</h4>-->
                </div>
                <div class="modal-body">
                    <!--<p>IMAGES GO HERE</p>-->
                    <div id="residenceImageCarousel" class="carousel slide" data-ride="carousel">

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <?php
                                #include database connection file
                                include('admin/connection/dbConnection.php');
                                
                                #query
                                $count = 0;
                                $q="select * from gallery where category = 'Residential'";
                                $result=$conn->query($q);
                                if($result->num_rows>0){ 
                                
                                    while($row=$result->fetch_assoc()){
                                        echo'<div class="item" id="'.$row['id'].'image">
                                                <img src="images/'.$row['image_path'].'" alt="">
                                                <div class="carousel-caption">                              
                                                <p>'.$row['image_name'].' </p>
                                                </div>
                                            </div>';
                                    }
                                }
                                $conn->close(); 
                            ?>
                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#residenceImageCarousel" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#residenceImageCarousel" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div><!-- END CAROUSEL -->
                </div><!-- END MODAL BODY-->
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div><!-- END MODAL -->
        <!-- Modal -->
    <div id="retailImageModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
                    <!--<h4 class="modal-title">Modal Header</h4>-->
                </div>
                <div class="modal-body">
                    <!--<p>IMAGES GO HERE</p>-->
                    <div id="retailImageCarousel" class="carousel slide" data-ride="carousel">

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <?php
                                #include database connection file
                                include('admin/connection/dbConnection.php');
                                
                                #query
                                $count = 0;
                                $q="select * from gallery where category = 'Retail'";
                                $result=$conn->query($q);
                                if($result->num_rows>0){ 
                                
                                    while($row=$result->fetch_assoc()){
                                        echo'<div class="item" id="'.$row['id'].'image">
                                                <img src="images/'.$row['image_path'].'" alt="">
                                                <div class="carousel-caption">                              
                                                <p>'.$row['image_name'].' </p>
                                                </div>
                                            </div>';
                                    }
                                }
                                $conn->close(); 
                            ?>
                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#retailImageCarousel" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#retailImageCarousel" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div><!-- END CAROUSEL -->
                </div><!-- END MODAL BODY-->
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div><!-- END MODAL -->
        <!-- Modal -->
    <div id="commercialImageModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
                    <!--<h4 class="modal-title">Modal Header</h4>-->
                </div>
                <div class="modal-body">
                    <!--<p>IMAGES GO HERE</p>-->
                    <div id="commercialImageCarousel" class="carousel slide" data-ride="carousel">

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <?php
                                #include database connection file
                                include('admin/connection/dbConnection.php');
                                
                                #query
                                $count = 0;
                                $q="select * from gallery where category = 'Commercial'";
                                $result=$conn->query($q);
                                if($result->num_rows>0){ 
                                
                                    while($row=$result->fetch_assoc()){
                                        echo'<div class="item" id="'.$row['id'].'image">
                                                <img src="images/'.$row['image_path'].'" alt="">
                                                <div class="carousel-caption">                              
                                                <p>'.$row['image_name'].' </p>
                                                </div>
                                            </div>';
                                    }
                                }
                                $conn->close(); 
                            ?>
                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#commercialImageCarousel" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#commercialImageCarousel" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div><!-- END CAROUSEL -->
                </div><!-- END MODAL BODY-->
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div><!-- END MODAL -->
    

    
        
        
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
