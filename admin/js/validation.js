/*
Written by Mukesh singh
Validation library v.2
last updated on 03/04/2016
*/

$(document).ready(function(){
    //userid validation
    function userid(){
       var regex = /^[0-9]{1,10}$/;  
       //var regex = /^[0-9-+]+$/;
       if($('#user_id').val().length==0){
       $('#error_userid').html('<span style="color:red;"><b>Please enter a valid userid.</b></span>');
       return 0;
       }
       else if(!regex.test($('#user_id').val())){
        $('#error_userid').html('<span style="color:red;"><b>Invalid user id.</b></span>');
        return 0;
       }
       else{
           $('#error_userid').html('<span style="color:green;"><b>Correct.</b></span>');
        return 1;
       }
    }
    
    //donorid validation
    function donorid(){
       var regex = /^[0-9]{1,10}$/;
       //var regex = /^[0-9-+]+$/;
       if($('#donor_id').val().length==0){
       $('#error_donorid').html('<span style="color:red;"><b>Please enter a valid donor id.</b></span>');
       return 0;
       }
       else if(!regex.test($('#donor_id').val())){
        $('#error_donorid').html('<span style="color:red;"><b>Invalid donor id.</b></span>');
        return 0;
       }
       else{
           $('#error_donorid').html('<span style="color:green;"><b>Correct.</b></span>');
        return 1;
       }
    }
    
    //areaid validation
    function areaid(){
       var regex = /^[0-9]{1,10}$/;
       //var regex = /^[0-9-+]+$/;
       if($('#area_id').val().length==0){
       $('#error_area_id').html('<span style="color:red;"><b>Please enter a valid area id.</b></span>');
       return 0;
       }
       else if(!regex.test($('#area_id').val())){
        $('#error_area_id').html('<span style="color:red;"><b>Invalid area id.</b></span>');
        return 0;
       }
       else{
        $('#error_area_id').html('<span style="color:green;"><b>Correct.</b></span>');
        return 1;
       }
    }
    
    //areaname validation
    function areaname(){
       if($('#new_area_name').val().length<=2){
       $('#error_new_area_name').html('<span style="color:red;"><b>Please enter a valid name.</b></span>');
       return 0;
       }
       else if($('#new_area_name').val().length>200){
        $('#error_new_area_name').html('<span style="color:red;"><b>Name too large.</b></span>');
        return 0;
       }
       else{
           $('#error_new_area_name').html('<span style="color:green;"><b>Correct.</b></span>');
        return 1;
       }
    }
    
    //name validation
    function name(){
       if($('#name').val().length<=2){
       $('#error_name').html('<span style="color:red;"><b>Please enter a valid name.</b></span>');
       return 0;
       }
       else if($('#name').val().length>200){
        $('#error_name').html('<span style="color:red;"><b>Name too large.</b></span>');
        return 0;
       }
       else{
           $('#error_name').html('<span style="color:green;"><b>Correct.</b></span>');
        return 1;
       }
    }
    
    //address validation
    function address(){
       if($('#address').val().length==0){
       $('#error_address').html('<span style="color:red;"><b>Please enter a valid address.</b></span>');
       return 0;
       }
       else if($('#address').val().length>300){
        $('#error_address').html('<span style="color:red;"><b>Address too large.</b></span>');
        return 0;
       }
       else{
           $('#error_address').html('<span style="color:green;"><b>Correct.</b></span>');
        return 1;
       }
    }
    
    
   //zipcode validation
   function zipcode(){
       var regex = /^[0-9]{1,10}$/;
       //var regex = /^[0-9-+]+$/;
       if(!regex.test($('#zipcode').val())){
           $('#error_zipcode').html('<span style="color:red;"><b>Please enter a valid zipcode.</b></span>');
            return 0;
       }
       else if($('#zipcode').val().length!=6){
           $('#error_zipcode').html('<span style="color:red;"><b>Not a valid zipcode.</b></span>');
           return 0;
       }
       else{
           $('#error_zipcode').html('<span style="color:green;"><b>Correct.</b></span>');
           return 1;
       }
   }
   
   
   //email validation
   function email(){
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
       if($('#email').val().length==0){
           $('#error_email').html('<span style="color:red;"><b></b></span>');
            return 0;
       }
       else if($('#email').val().length>100){
           $('#error_email').html('<span style="color:red;"><b>Email too large.</b></span>');
           return 0;
       }
       else if(!regex.test($('#email').val())){
           $('#error_email').html('<span style="color:red;"><b>Not a valid email.</b></span>');
           return 0;
       }
       else{
           $('#error_email').html('<span style="color:green;"><b>Correct.</b></span>');
           return 1;
       }
   }
   
   
   //password validation
   function password(){
     if($('#password').val().length<6){
     $('#error_password').html('<span style="color:red;"><b>Minimum required length of password is 6.</b></span>');
     return 0;
     }
     else if($('#password').val().length>200){
     $('#error_password').html('<span style="color:red;"><b>Password too large.</b></span>');
      return 0;
     }
     else{
     $('#error_password').html('<span style="color:green;"><b>Correct.</b></span>');
      return 1;
     }
   }
   
   
   
   //contact validation
   function contact(){
        var regex = /^[0-9]{1,11}$/;
       //var regex = /^[0-9-+]+$/;
       if(!regex.test($('#contact').val())){
           $('#error_contact').html('<span style="color:red;"><b>Please enter valid contact.</b></span>');
            return 0;
       }
       else if($('#contact').val().length!=10 &&  $('#contact').val().length!=11){
           $('#error_contact').html('<span style="color:red;"><b>Not a valid contact.</b></span>');
           return 0;
       }
       else{
           $('#error_contact').html('<span style="color:green;"><b>Correct.</b></span>');
           return 1;
       }
   }
   
   //contact_n validation
   function contact_n(contactN){
       var regex = /^[0-9]{1,11}$/;
       //var regex = /^[0-9-+]+$/;
       
       if($('#'+contactN).val().length==0){
         $('#error_'+contactN).html('<span style="color:red;"><b></b></span>');
         return 1;         
       }
       else if(!regex.test($('#'+contactN).val())){
           $('#error_'+contactN).html('<span style="color:red;"><b>Please enter a valid contact.</b></span>');
            return 0;
       }
       else if($('#'+contactN).val().length!=10 &&  $('#contact').val().length!=11 && $('#'+contactN).val().length>0){
           $('#error_'+contactN).html('<span style="color:red;"><b>Not a valid contact.</b></span>');
           return 0;
       }
       else{
           $('#error_'+contactN).html('<span style="color:green;"><b>Correct.</b></span>');
           return 1;
       }
   }
   
   
   
   //level validation (optinal can be removed)
   function level(){
       var regex = /^[0-9]{1,11}$/;
       //var regex = /^[0-9-+]+$/;
       if(!regex.test($('#level').val())){
         $('#error_level').html('<span style="color:red;"><b>Not a valid level.</b></span>');
         return 0;
       }
       else if($('#level').val()<0 && $('#level').val()>2){
         $('#error_level').html('<span style="color:red;"><b>Not a valid level.</b></span>');
         return 0;
       }
       else{
         $('#error_level').html('<span style="color:green;"><b>Correct.</b></span>');
         return 1;
       }
   }
   
   
   //gender validation
   function gender(){
       var gender=$('input[name=gender]:checked').val();
       if(gender!="Male" && gender!="Female" && gender!="Other"){
       $('#error_gender').html('<span style="color:red;"><b>Not a valid gender.</b></span>');
       return 0;
       }
       else{
       $('#error_gender').html('<span style="color:green;"><b>Correct.</b></span>');
       return 1;
       }
   }
   
   //collection days (multi-select option validation)
   function collection_days(){
       if($('#collection_days').val().length==0){
        $('#error_collection_days').html('<span style="color:red;"><b>Select collection days.</b></span>');
       return 0;   
       }
       else{
       $('#error_collection_days').html('<span style="color:green;"><b>Correct.</b></span>');
       return 1;    
       }
   }
   
   //image validation
   function imageval(){
        var extension = $('#serviceimage').val().split('.').pop().toUpperCase();
        if (extension!="PNG" && extension!="JPG" && extension!="GIF" && extension!="JPEG"){
            return 0;
        }
        return 1;
  }
   
 
 //==========================customization code goes here=============================================
//below code can be removed as it customized for specific form validations 
 
   //calling userid on keyup
   $('#user_id').keyup(function(){
       userid();
   });
   $('#user_id').focusout(function(){
       userid();
   });
 
   //calling donorid on keyup
   $('#donor_id').keyup(function(){
       donorid();
   });
   $('#donor_id').focusout(function(){
       donorid();
   });
 
   //calling name on keyup
   $('#name').keyup(function(){
       name();
   });
   $('#name').focusout(function(){
       name();
   });    
   
   //calling address on keyup
   $('#address').keyup(function(){
       address();
   });
  $('#address').focusout(function(){
       address();
   });    
   
   //calling zipcode on keyup
   $('#zipcode').keyup(function(){
       zipcode();
   });
   $('#zipcode').focusout(function(){
       zipcode();
   });    
   
   //calling email on keyup
   $('#email').keyup(function(){
       email();
   });
   $('#email').focusout(function(){
       email();
   });
   
   //calling password on keyup
   $('#password').keyup(function(){
      password(); 
   });
   $('#password').focusout(function(){
      password(); 
   });
   
   //calling contact on keyup
    $('#contact').keyup(function(){
     contact();   
   }); 
   $('#contact').focusout(function(){
     contact();   
   });
   
   //calling contact_n on keyup
    $('#contact_2').keyup(function(){
     contact_n('contact_2');   
   }); 
   $('#contact_2').focusout(function(){
     contact_n('contact_2');   
   });
   
   //calling contact_n on keyup
    $('#contact_3').keyup(function(){
     contact_n('contact_3');   
   }); 
   $('#contact_3').focusout(function(){
     contact_n('contact_3');   
   }); 
   
   //calling level on change in select tag
   $('#level').on('change',function(){
       level();
   });
   
   
   //calling gender on change in radio button
   $('input[name=gender]').change(function(){
     gender();   
   });
   
   //calling collection days
   $('#collection_days').click(function(){
       collection_days();
   });
   
   
   //calling new area id 
   $('#area_id').keyup(function(){
       areaid();
   });
   $('#area_id').focusout(function(){
       areaid();
   });
   
   //calling new area name 
   $('#new_area_name').keyup(function(){
       areaname();
   });
   $('#new_area_name').focusout(function(){
       areaname();
   });
   
   
   //check all inputs of add user form on final submit
   // remove this function if you want to use above core validation functions only.
   //these functions are added for customization purpose and can be removed from this validation library.   
   $('#userValidateButton').click(function(){
       //alert("hey");
       //if everything is ok.
       if(name()==1 && password()==1 && email()==1){
           //disable add button
           $('#userValidateButton').attr('disabled','disabled');
           $.post('user_add.php',{'name':$('#name').val(),'password':$('#password').val(),'email':$('#email').val()},function(data){
               //alert(data);
               if(data['status']=='true'){
                    $('#userValidateButton').html('<span style="color:green;"><b>'+data['message']+'</b></span>');
                       setTimeout(
                    function() 
                    {
                    //do something special
                    $('#userValidateButton').html('Add'); 
                    }, 3000); 
                    
                    //reset all fields
                    $('#name').val('');
                    $('#password').val('');
                    $('#email').val('');
                    
                    //remove all error messages
                   $('#error_name').html('');
                   $('#error_email').html('');
                   $('#error_password').html('');
               }
               else{
                    $('#userValidateButton').html('<span style="color:red;"><b>'+data['message']+'</b></span>');
                     setTimeout(
                    function() 
                    {
                    //do something special
                    $('#userValidateButton').html('Add');    
                    }, 3000); 
                       
                   }
                   
                //enable button
                $('#userValidateButton').removeAttr('disabled');
                   
           });
       }
   });
   
   //update contact details
   $('#contactDetailsValidateButton').click(function(){
       //disable the button
       $('#contactDetailsValidateButton').attr('disabled','disabled');
       $.post('update_contactDetails.php',{'details':$('#details').val()},function(data){
           
           if(data['status']=="true"){
              $('#contactDetailsValidateButton').html('<span style="color:green;"><b>'+data['message']+'</b></span>');
                       setTimeout(
                    function() 
                    {
                    //do something special
                    $('#contactDetailsValidateButton').html('Update'); 
                    }, 3000);  
           }
           else{
               
               $('#contactDetailsValidateButton').html('<span style="color:red;"><b>'+data['message']+'</b></span>');
                     setTimeout(
                    function() 
                    {
                    //do something special
                    $('#contactDetailsValidateButton').html('Add');    
                    }, 3000); 
               
           }
       
       $('#contactDetailsValidateButton').removeAttr('disabled');    
       });
       
   });
   
   
   //all delete request
   $('button').click(function(){
       //disable button
       $('#'+this.id).attr('disabled','disabled');
       var prefix=this.id.substring(0,2);
       //alert(prefix);
       
       //to delete user
       if(prefix=="DU"){
           var divval=$('#'+this.id).val();
           //alert(divval);
          $.post('user_delete.php',{'userid':divval},function(data){
              if(data['status']=="true"){
                  //alert(divval);
                  $('#'+divval).hide();
              }
              else{
                  
                $('#'+this.id).html('<span style="color:red;"><b>'+data['message']+'</b></span>');
                     setTimeout(
                    function() 
                    {
                    //do something special
                    $('#'+this.id).html('Delete');    
                    }, 3000);   
                  
                $('#'+this.id).removeAttr('disabled');
                 
              }
          });
       }
       
       //to delete from gallery
       if(prefix=="DG"){
           var divval=$('#'+this.id).val();
          // alert(divval);
          $.post('gallery_delete.php',{'serviceid':divval},function(data){
              
              if(data['status']=="true"){
                  //alert(divval);
                  $('#'+divval).hide();
              }
              else{
                  
                $('#'+this.id).html('<span style="color:red;"><b>'+data['message']+'</b></span>');
                     setTimeout(
                    function() 
                    {
                    //do something special
                    $('#'+this.id).html('Delete');    
                    }, 3000);   
                  
                $('#'+this.id).removeAttr('disabled');
                 
              }
          });
       }
       
       //to delete clientele
       
       if(prefix=="DP"){
           var divval=$('#'+this.id).val();
          // alert(divval);
          $.post('clientele_delete.php',{'clienteleid':divval},function(data){
              
              if(data['status']=="true"){
                  //alert(divval);
                  $('#'+divval).hide();
              }
              else{
                  
                $('#'+this.id).html('<span style="color:red;"><b>'+data['message']+'</b></span>');
                     setTimeout(
                    function() 
                    {
                    //do something special
                    $('#'+this.id).html('Delete');    
                    }, 3000);   
                  
                $('#'+this.id).removeAttr('disabled');
                 
              }
          });
       }
       
       //to delete slider
       
       if(prefix=="DS"){
           var divval=$('#'+this.id).val();
          // alert(divval);
          $.post('slider_delete.php',{'serviceid':divval},function(data){
              
              if(data['status']=="true"){
                  //alert(divval);
                  $('#'+divval).hide();
              }
              else{
                  
                $('#'+this.id).html('<span style="color:red;"><b>'+data['message']+'</b></span>');
                     setTimeout(
                    function() 
                    {
                    //do something special
                    $('#'+this.id).html('Delete');    
                    }, 3000);   
                  
                $('#'+this.id).removeAttr('disabled');
                 
              }
          });
       }
       
   });
   
});