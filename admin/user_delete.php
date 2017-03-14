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
if(!empty($_POST['userid'])){
$checkUser="select * from users where user_id=".$_POST['userid'];
$resultUser=$conn->query($checkUser);

if($resultUser->num_rows==1){
    $deleteUser="delete from users where user_id=".$_POST['userid'];
    if($conn->query($deleteUser)){
    $output['status']='true';
    $output['message']='User deleted!';
    }
    else{
    $output['status']='false';
    $output['message']='failed to delete user!';
    }
}
else{
    $output['status']='false';
    $output['message']='User does not exist!';
}

}
else{
    $output['status']='false';
    $output['message']='Please provide valid data!';
}

echo json_encode($output,JSON_PRETTY_PRINT | JSON_NUMERIC_CHECK);
$conn->close();
?>