<?php
session_start();
if(!isset($_SESSION['user_id'])){
 setcookie('NOT_LOGGED_IN','Please login to continue!' , time()+3600, "/");
 header("Location: http://localhost/szr/admin");
 exit(); 
}

header('Content-Type: application/json');
ini_set('display_errors',1); 
error_reporting(E_ALL);
include('connection/dbConnection.php');


#set timezone
date_default_timezone_set('Asia/Calcutta');


$output=array();
if(isset($_FILES["clienteleimage"]["name"]) && !empty($_POST['name'])){

    //upload image
    $target_dir = "../images/clientele/";
    $FileType = pathinfo($_FILES["clienteleimage"]["name"],PATHINFO_EXTENSION);
    $FileType = strtoupper($FileType);
    //check extension
    if($FileType=="PNG" || $FileType=="JPG" || $FileType=="JPEG" || $FileType=="GIF"){
    $filename=uniqid().".".$FileType;
    $target_file = $target_dir . basename($filename);
    move_uploaded_file($_FILES["clienteleimage"]["tmp_name"], $target_file);
    
    $insertclientele="insert into clientele(image_path,client_name) values('".$target_file."','".$_POST['name']."')";
   
    if($conn->query($insertclientele)){
    $output['status']='true';
    $output['message']='clientele added!';
       //set cookie for success 
       setcookie('P_ADDED','clientele added!' , time()+3600, "/");
    }
    else{
    $output['status']='false';
    $output['message']='failed to add clientele!';
        //set cookie for failure
        setcookie('P_FAILED','failed to add clientele!' , time()+3600, "/");
    }
  }
  //wrong file format
  else{
      //set cookie for  wrong format
      setcookie('P_FAILED','Image should be in JPG/PNG/GIF format!' , time()+3600, "/");
  }

}
else{
    
    $output['status']='false';
    $output['message']='Provide valid data!';
    
    
    //set cookie for invalid data
    setcookie('P_FAILED','Provide valid data!' , time()+3600, "/");
}

//redirect to clienteles settings
header("Location: http://localhost/szr/admin/clientele_settings.php");
echo json_encode($output,JSON_PRETTY_PRINT | JSON_NUMERIC_CHECK);
$conn->close();
?>