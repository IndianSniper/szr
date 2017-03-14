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
if(!empty($_POST['portfolioid'])){
$checkportfolio="select * from portfolio where id=".$_POST['portfolioid'];
$resultportfolio=$conn->query($checkportfolio);

if($resultportfolio->num_rows==1){
    $deleteportfolio="delete from portfolio where id=".$_POST['portfolioid'];
    if($conn->query($deleteportfolio)){
    $output['status']='true';
    $output['message']='portfolio deleted!';
    }
    else{
    $output['status']='false';
    $output['message']='failed to delete portfolio!';
    }
}
else{
    $output['status']='false';
    $output['message']='portfolio does not exist!';
}

}
else{
    $output['status']='false';
    $output['message']='Please provide valid data!';
}

echo json_encode($output,JSON_PRETTY_PRINT | JSON_NUMERIC_CHECK);
$conn->close();
?>