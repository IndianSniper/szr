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
if(!empty($_POST['name']) && !empty($_POST['password']) && !empty($_POST['email'])){
$checkUser="select * from users where email='".$_POST['email']."'";
$resultUser=$conn->query($checkUser);

if($resultUser->num_rows==0){
    $insertUser="insert into users(name,password,email) values('".$_POST['name']."',sha1('".$_POST['password']."'),'".$_POST['email']."')";
    if($conn->query($insertUser)){
    $output['status']='true';
    $output['message']='User added!';
    }
    else{
    $output['status']='false';
    $output['message']='failed to add user!';
    }
}
else{
    $output['status']='false';
    $output['message']='Email id already exist!';
}

}
else{
    $output['status']='false';
    $output['message']='Please provide valid data!';
}

echo json_encode($output,JSON_PRETTY_PRINT | JSON_NUMERIC_CHECK);
$conn->close();
?>