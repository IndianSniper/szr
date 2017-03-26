
            <!--Footer Content-->
            
            <div class="footer-content">
            	<div class="social-links">
                	<a href="https://www.facebook.com/SZR-Interiors-888741024601787/" target="blank"><span class="fa fa-facebook-f"></span></a>
                    <a href="https://www.linkedin.com/in/szr-interiors-riyaz-3757978b/" target="blank"><span class="fa fa-linkedin"></span></a>
                    <a href="https://plus.google.com/u/0/photos/114902072439251520492/album/6398796194794694977/6398796194263661394?authkey=CJG0o6iypZmHHw"><span class="fa fa-google-plus"></span></a>
                </div>
                <?php
                    
                      #include database connection file
                      include('admin/connection/dbConnection.php');
                      
                      #query
                      $q="select * from contact_details";
                      $result=$conn->query($q);
                     if($result->num_rows>0){ 
                         while($row=$result->fetch_assoc()){
                            echo $row['details'];
                        }
                      
                    }
                  $conn->close(); 
                
                ?>
                <p><div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script></p>
                <p>Developed by : <a href="http://anmtechsolutions.com/" target="blank">ANM</a></p>
            </div>