<?php include("header.php"); ?>

 
            <div class="page animsition">
    <div class="page-content" id="main_loading_page">
    	<div class="widget widget-shadow widget-responsive" id="widgetLineareaColor">
            <div class="widget-content">
              <div class="padding-top-30 padding-30" style="height:calc(100% - 250px);">

<div class="panel">
        <div class="panel-heading">
          <h3 class="panel-title">Add Clientele
          
          <?php
          if(isset($_COOKIE['P_ADDED'])){ 
           echo '<span style="color:green;"><b>'.$_COOKIE['P_ADDED'].'</b></span>';
           unset($_COOKIE['P_ADDED']);
           setcookie("P_ADDED",null,-1,"/");
           }
           elseif(isset($_COOKIE['P_FAILED'])){ 
           echo '<span style="color:red;"><b>'.$_COOKIE['P_FAILED'].'</b></span>';
           unset($_COOKIE['P_FAILED']);
           setcookie("P_FAILED",null,-1,"/");
           }
           ?>
          </h3>
        </div>
            <div class="panel-body">
            <form id="servicesform" action="clientele_add.php" method="post" enctype="multipart/form-data">
            <div class="row row-lg">
              <div class="col-lg-6 form-horizontal">
                <div class="form-group">
                  <label class="col-lg-12 col-sm-3 control-label">Image :
                    <span class="required">*</span>
                  </label>
                  <div class=" col-lg-12 col-sm-9">
                    <input type="file" class="form-control" id="clienteleimage" name="clienteleimage"  />
                    <div id="error_clienteleimage"></div>
                  </div>
                  
                </div>
                <div class="form-group">
                  <label class="col-lg-12 col-sm-3 control-label">Client name :
                    <span class="required">*</span>
                  </label>
                  <div class=" col-lg-12 col-sm-9">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Client name" required="">
                    <div id="error_name"></div>
                  </div>
                  
                </div>
        
        <div class="form-group col-lg-12 text-right padding-top-m">
                <input type="submit" class="btn btn-primary" value="Add" id="clienteleValidateButton"/>
              </div>
            </div>
            </div>
         <div id="error_clienteleValidateButton"><hr/></div>
         </form>
        </div>
 </div>
 
     <div class="row">
        <div class="col-lg-12">
          <!-- Panel Filtering -->
          <div class="panel">
            <header class="panel-heading">
              <h3 class="panel-title">clientele list</h3>
            </header>
            <div class="panel-body">
            
                <!--fetch data dynamically-->
                      <?php
                      #include database connection file
                      include('connection/dbConnection.php');
                      
                      #query
                      $q="select * from clientele";
                      $result=$conn->query($q);
                     if($result->num_rows>0){ 
                    
                      while($row=$result->fetch_assoc()){
                       
                       
                  echo'<div id="'.$row['id'].'">
                    <p><b><img src="'.$row['image_path'].'" width="300" height="300"/><p>
                    <p><b>Name : </b>'.$row['client_name'].'</p>
                    <button type="submit" class="btn btn-primary" id="DP'.$row['id'].'" value="'.$row['id'].'">Delete</button>
                  </div>
                  <hr/>';
                  }
                  
                }
                  $conn->close();   
                  ?>
                  
                  
                </div>
            </div>
          </div>
          <!-- End Panel Filtering -->
        </div>


</div>
              </div>
             </div>
               
          </div>
     
    </div>
  <!-- End Page -->
        
<?php include("footer.php"); ?>

                <script src="http://localhost/szr/admin/js/validation.js"></script>