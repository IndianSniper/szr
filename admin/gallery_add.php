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
if(isset($_FILES["serviceimage"]["name"]) && !empty($_POST['name'])){

    //upload image
    $target_dir = "../images/gallery/";
    $FileType = pathinfo($_FILES["serviceimage"]["name"],PATHINFO_EXTENSION);
    $FileType = strtoupper($FileType);
    //check extension
    if($FileType=="PNG" || $FileType=="JPG" || $FileType=="JPEG" || $FileType=="GIF"){
    $filename=uniqid().".".$FileType;
    $target_file = $target_dir . basename($filename);
    move_uploaded_file($_FILES["serviceimage"]["tmp_name"], $target_file);

    
    $insertService="insert into gallery(image_path,image_name,image_description, category) values('".$target_file."','".$_POST['name']."','".$_POST['details']."','".$_POST['category']."')";
     
    if(empty($_POST['details']))
    $insertService="insert into gallery(image_path,image_name, image_description, category) values('".$target_file."','".$_POST['name']."','No description','".$_POST['category']."')";
        
    if($conn->query($insertService)){
    $output['status']='true';
    $output['message']='Image added!';
       //set cookie for success 
       setcookie('S_ADDED','Image added!' , time()+3600, "/");
    }
    else{
    $output['status']='false';
    $output['message']='failed to add image!';
        //set cookie for failure
        setcookie('S_FAILED','failed to add image!' , time()+3600, "/");
    }
  }
  //wrong file format
  else{
      //set cookie for  wrong format
      setcookie('S_FAILED','Image should be in JPG/PNG/GIF format!' , time()+3600, "/");
  }

}
else{
    
    $output['status']='false';
    $output['message']='Provide valid data!';
    
    
    //set cookie for invalid data
    setcookie('S_FAILED','Provide valid data!' , time()+3600, "/");
}

//redirect to services settings
header("Location: http://localhost/szr/admin/gallery_settings.php");
echo json_encode($output,JSON_PRETTY_PRINT | JSON_NUMERIC_CHECK);
$conn->close();
?>