<?php include("header.php"); ?>

 <div class="page animsition">
    <div class="page-content" id="main_loading_page">
    	<div class="widget widget-shadow widget-responsive" id="widgetLineareaColor">
            <div class="widget-content">
              <div class="padding-top-30 padding-30" style="height:calc(100% - 250px);">

<div class="panel">
        <div class="panel-heading">
          <h3 class="panel-title">Add Gallery Images
          
          <?php
if(isset($_COOKIE['S_ADDED'])){
	echo '<span style="color:green;"><b>'.$_COOKIE['S_ADDED'].'</b></span>';
	unset($_COOKIE['S_ADDED']);
	setcookie("S_ADDED",null,-1,"/");
}
elseif(isset($_COOKIE['S_FAILED'])){
	echo '<span style="color:red;"><b>'.$_COOKIE['S_FAILED'].'</b></span>';
	unset($_COOKIE['S_FAILED']);	
	setcookie("S_FAILED",null,-1,"/");	
}
?>
          </h3>
        </div>
            <div class="panel-body">
            <form id="servicesform" action="gallery_add.php" method="post" enctype="multipart/form-data">
            <div class="row row-lg">
              <div class="col-lg-6 form-horizontal">
                <div class="form-group">
                  <label class="col-lg-12 col-sm-3 control-label">Image  :
                    <span class="required">*</span>
                  </label>
                  <div class=" col-lg-12 col-sm-9">
                    <input type="file" class="form-control" id="serviceimage" name="serviceimage"  />
                    <div id="error_serviceimage"></div>
                  </div>
                  
                </div>
                <div class="form-group">
                  <label class="col-lg-12 col-sm-3 control-label">Image name :
                    <span class="required">*</span>
                  </label>
                  <div class=" col-lg-12 col-sm-9">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Image name" required="" data-fv-field="username">
                    <div id="error_name"></div>
                  </div>
                  
                </div>
                <div class="form-group">
                  <label class="col-lg-12 col-sm-3 control-label">Category:
                    <span class="required">*</span>
                  </label>
                  <select class="form-control" id="category">
                    <?php
                        include('connection/dbConnection.php');
                        $query = "SELECT * FROM categories";
                        $result = $conn->query($query); 
                        if($result->num_rows > 0){
                          while($row = $result->fetch_assoc()){
                            echo "<option>".$row["category_name"]."</option>";
                          }
                        }
                        $conn->close();
                    ?>
                  </select>
                </div>

                <div class="form-group">
                  <label class="col-lg-12 col-sm-3 control-label">Details 
                    <span class="required">(Optional)</span>
                  </label>
                  <div class="col-lg-12 col-sm-9">
                    <div class="input-group">
                       <textarea rows="4" cols="55" class="form-control" id="details" name="details"></textarea>
                    </div>
                    <div id="error_password"></div>
                  </div>
                </div>
                
              <div class="form-group col-lg-12 text-right padding-top-m">
                <input type="submit" class="btn btn-primary" value="Add" id="servicesValidateButton"/>
              </div>
            </div>
            </div>
         <div id="error_serviceValidateButton"><hr/></div>
         </form>
        </div>
 </div>
 
<div class="row">
        <div class="col-lg-12">
          <!-- Panel Filtering -->
          <div class="panel">
            <header class="panel-heading">
              <h3 class="panel-title">Image list</h3>
            </header>
            <div class="panel-body">
            
                <!--fetch data dynamically-->
                      <?php
                      #include database connection file
                      include('connection/dbConnection.php');
                      
                      #query
                      $q="select * from gallery";
                      $result=$conn->query($q);
                     if($result->num_rows>0){ 
                    
                      while($row=$result->fetch_assoc()){
                       
                       
                  echo'<div id="'.$row['id'].'">
                    <p><b><img src="'.$row['image_path'].'" width="300" height="300"/><p>
                    <p><b>Name : </b>'.$row['image_name'].'</p>
                    <p><b>Description : </b>'.$row['image_description'].'</p>
                    <p><b>Category : </b>'.$row['category'].'</p>
                    <button type="submit" class="btn btn-primary" id="DG'.$row['id'].'" value="'.$row['id'].'">Delete</button>
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