<?php include("header.php"); ?>

 
            <div class="page animsition">
    <div class="page-content" id="main_loading_page">
    	<div class="widget widget-shadow widget-responsive" id="widgetLineareaColor">
            <div class="widget-content">
              <div class="padding-top-30 padding-30" style="height:calc(100% - 250px);">

<div class="panel">
        <div class="panel-heading">
          <h3 class="panel-title">Add user
            <span class="panel-desc">Adding users here will allow them to use admin panel.</span>
          </h3>
        </div>
            <div class="panel-body">

            <div class="row row-lg">
              <div class="col-lg-6 form-horizontal">
                <div class="form-group">
                  <label class="col-lg-12 col-sm-3 control-label">name :
                    <span class="required">*</span>
                  </label>
                  <div class=" col-lg-12 col-sm-9">
                    <input type="text" class="form-control" id="name" name="username" placeholder="FirstName LastName" required="" data-fv-field="username">
                    <div id="error_name"></div>
                  </div>
                  
                </div>

                <div class="form-group">
                  <label class="col-lg-12 col-sm-3 control-label">Email
                    <span class="required">*</span>
                  </label>
                  <div class="col-lg-12 col-sm-9">
                    <div class="input-group">
                      <span class="input-group-addon">
                        <i class="icon wb-envelope" aria-hidden="true"></i>
                      </span>
                      <input type="email" class="form-control" id="email" name="email" placeholder="email@email.com" required="" data-fv-field="email">
                     
                    </div>
                     <div id="error_email"></div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-12 col-sm-3 control-label">Password
                    <span class="required">*</span>
                  </label>
                  <div class="col-lg-12 col-sm-9">
                    <div class="input-group">
                      <span class="input-group-addon">
                        <i class="icon wb-lock" aria-hidden="true"></i>
                      </span>
                      <input type="password" class="form-control"id="password" name="password" placeholder="Min length 6" required="" data-fv-field="password">
                      
                    </div>
                    <div id="error_password"></div>
                  </div>
                </div>
                
              <div class="form-group col-lg-12 text-right padding-top-m">
                
                <button type="submit" class="btn btn-primary" id="userValidateButton" >Add</button>
              </div>
            </div>

           

              
            </div>
         <div id="error_userValidateButton"><hr/></div>
        </div>
 </div>
 
     <div class="row">
        <div class="col-lg-12">
          <!-- Panel Filtering -->
          <div class="panel">
            <header class="panel-heading">
              <h3 class="panel-title">User list</h3>
            </header>
            <div class="panel-body">
            
                <!--fetch user dynamically-->
                      <?php
                      #include database connection file
                      include('connection/dbConnection.php');
                      
                      #query
                      $q="select * from users";
                      $result=$conn->query($q);
                     if($result->num_rows>0){ 
                    
                      while($row=$result->fetch_assoc()){
                       
                       
                  echo'<div id="'.$row['user_id'].'">
                    <p><b>User id : </b>'.$row['user_id'].'<p>
                    <p><b>Name : </b>'.$row['name'].'</p>
                    <p><b>Email id : </b>'.$row['email'].'</p>
                    <button type="submit" class="btn btn-primary" id="DU'.$row['user_id'].'" value="'.$row['user_id'].'">Delete</button>
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