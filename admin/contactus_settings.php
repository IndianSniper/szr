<?php include("header.php"); ?>

 
            <div class="page animsition">
    <div class="page-content" id="main_loading_page">
    	<div class="widget widget-shadow widget-responsive" id="widgetLineareaColor">
            <div class="widget-content">
              <div class="padding-top-30 padding-30" style="height:calc(100% - 250px);">

<div class="panel">
        <div class="panel-heading">
          <h3 class="panel-title">Update Contact us
          </h3>
        </div>
            <div class="panel-body">

            <div class="row row-lg">
              <div class="col-lg-6 form-horizontal">
                <div class="form-group">
                  <label class="col-lg-12 col-sm-3 control-label">Details :
                    <span class="required">*</span>
                  </label>
                  <div class=" col-lg-12 col-sm-9">
                    <textarea rows="4" cols="50" class="form-control" id="details" name="details"><?php
                    include('connection/dbConnection.php');
                    $result=$conn->query("select details from contact_details");
                    if($result->num_rows>0){
                        $row=$result->fetch_assoc();
                        echo $row['details'];
                    }
                    else echo "";
                    $conn->close();
                    ?></textarea>
                  </div>
                  
                </div>


                
              <div class="form-group col-lg-12 text-right padding-top-m">
                
                <button type="submit" class="btn btn-primary" id="contactDetailsValidateButton" >Update</button>
              </div>
            </div>

           

              
            </div>
         <div id="error_userValidateButton"><hr/></div>
        </div>
 </div>
 
</div>
              </div>
             </div>
               
          </div>
     
    </div>
  <!-- End Page -->
        
<?php include("footer.php"); ?>


                <script src="http://localhost/szr/admin/js/validation.js"></script>