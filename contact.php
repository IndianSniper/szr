<!DOCTYPE html>
<html>


<head>
<meta charset="utf-8">
<title>SZR Interiors | Contact Us</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
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
        	<!--div class="content-box">
            	<h1>Contact Us</h1>
                <div class="bread-crumb"><a href="index-2.html">Home</a> / <a href="#" class="current">Contact Us</a></div>
            </div-->
        </div>
    </section>
    
    
    
    <!--Info Section-->
    <section class="info-section contact-section">
    	<div class="auto-container">
            <h2>It’s Easy to Find Us</h2>
            <!--Contact Info-->
            <div class="contact-info">
                <div class="row clearfix">
                    <!--Column-->
                    <div class="column col-md-4 col-sm-6 col-xs-12">
                        <span class="icon flaticon-location74"></span>
                        <h3>ADDRESS</h3>
                        <p>SZR Interiors, Sai Shraddha I Plot, A1 Building, Shop No.3, Daulat Nagar, Relief Road, Santacruz (West) Mumbai – 400 054</p>
                    </div>
                    
                    <!--Column-->
                    <div class="column col-md-4 col-sm-6 col-xs-12">
                        <span class="icon flaticon-envelope126"></span>
                        <h3>EMAIL</h3>
                        <p>Info@szrinteriors.com, <br>szrinteriors@gmail.com</p>
                    </div>
                    
                    <!--Column-->
                    <div class="column col-md-4 col-sm-6 col-xs-12">
                        <span class="icon flaticon-telephone51"></span>
                        <h3>PHONE</h3>
                        <p>+91 9833 1819 65</p>
                    </div>
                    
                </div>
            </div>
            
        </div>
    </section>
    
    <!--Contact Section-->
    <section class="default-section faded-section contact-section" style="background-image:url(images/background/contact-bg.jpg);">
    	<div class="auto-container small-container">
            	<div class="sec-title">
                	<h2>Business Enquiry</h2>
                </div>
                
            <!--Contact Form-->
            <div class="column contact-form">
                <form method="post" id="contact-form" action="send_message.php">
                    <div class="row clearfix">
                        <div class="col-md-4 col-sm-6 col-xs-12 form-group">
                            <input type="text" name="username" value="" placeholder="Username"/>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 form-group">
                            <input type="text" name="company" value="" placeholder="Company">
                        </div>
                         <div class="col-md-4 col-sm-6 col-xs-12 form-group">
                            <input type="text" name="phone" value="" placeholder="Phone Number" required>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 form-group">
                            <input type="email" name="email" value="" placeholder="Email" >
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 form-group">
                            <input type="text" name="subject" value="" placeholder="Subject">
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                            <textarea name="contact_message" placeholder="Message"></textarea>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 form-group text-center">
                            <button type="submit" name="submit" class="theme-btn btn-style-one">Send</button>
                        </div>
                    </div>
                </form>
            </div>
            
            <!--Separator-->
            <div class="separator big-separator"></div>
            
               <!--include header-->
               <?php include('footer.php'); ?> 
            
        </div>
    </section>
        <!--Map Section-->
    <section class="map-section">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d942.5928272813666!2d72.8343379268362!3d19.091360013665817!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTnCsDA1JzI4LjkiTiA3MsKwNTAnMDUuNiJF!5e0!3m2!1sen!2s!4v1489461155656" style="width:100%;height:450px;" frameborder="0" style="border:0" allowfullscreen></iframe>
        
    </section>
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top"><span class="fa fa-arrow-up"></span></div>

<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.mixitup.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/validate.js"></script>
<script src="http://maps.google.com/maps/api/js"></script>
<script src="js/googlemaps.js"></script>
<script src="js/wow.js"></script>
<script src="js/script.js"></script>


</body>

</html>
