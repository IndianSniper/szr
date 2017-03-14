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
if(!empty($_POST['serviceid'])){
$checkService="select * from gallery where id=".$_POST['serviceid'];
$resultService=$conn->query($checkService);

if($resultService->num_rows==1){
    $deleteService="delete from gallery where id=".$_POST['serviceid'];
    if($conn->query($deleteService)){
    $output['status']='true';
    $output['message']='Image deleted!';
    }
    else{
    $output['status']='false';
    $output['message']='failed to delete Service!';
    }
}
else{
    $output['status']='false';
    $output['message']='Image does not exist!';
}

}
else{
    $output['status']='false';
    $output['message']='Please provide valid data!';
}

echo json_encode($output,JSON_PRETTY_PRINT | JSON_NUMERIC_CHECK);
$conn->close();
?>