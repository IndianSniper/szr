<?php
session_start();
header('Content-Type: application/json');
ini_set('display_errors',1); 
error_reporting(E_ALL);
include('../connection/dbConnection.php');

$user_id=mysqli_real_escape_string($conn,$_REQUEST['user_id']);
$password=sha1(mysqli_real_escape_string($conn,$_REQUEST['password']));


$stmt="select * from users where user_id='".$user_id."' and password='".$password."'";
$result=$conn->query($stmt);

if($result->num_rows>0){
//set session
$_SESSION['user_id']=$user_id;

$output=array();
$output['status']="true";
$output['message']="Success.";
while($row=$result->fetch_assoc()){
$output['name']=$row['name'];

#username
$_SESSION['user_name']=$row['name'];

}

echo json_encode($output,JSON_PRETTY_PRINT | JSON_NUMERIC_CHECK);
}
else{
$output=array();
$output['status']="false";
$output['message']="Wrong username or password.";
echo json_encode($output,JSON_PRETTY_PRINT | JSON_NUMERIC_CHECK);
}

$conn->close();

?>