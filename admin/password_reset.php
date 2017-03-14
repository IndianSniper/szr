<?php
header('Content-Type: application/json');
ini_set('display_errors',1); 
error_reporting(E_ALL);

#include database connection file
include('connection/dbConnection.php');

#xxx1=email id && xxx2=file to be deleted

$output=array();
if(!empty($_POST['password']) && !empty($_POST['xxx1']) && !empty($_POST['xxx2'])){

#get all email ids
$q1="select email from users";
$result=$conn->query($q1);


if($result->num_rows>0){

while($row=$result->fetch_assoc()){
 if(sha1($row['email'])==$_POST['xxx1']){
 $q2="update users set password='".sha1($_POST['password'])."' where email='".$row['email']."'";
 
 if($conn->query($q2)){
 $output['status']="true";
 $output['message']="Password reset successfull.";
 
 #delete file
 unlink('forgotpasswordlinks/'.$_POST['xxx2']);
 }
 else{
 $output['status']="false";
 $output['message']="Password reset failed.";
 }
 break;
 
 }
}

}

}
else{
$output['status']="false";
$output['message']="Invalid input(s) provided.";
}

echo json_encode($output,JSON_PRETTY_PRINT | JSON_NUMERIC_CHECK);
$conn->close();
?>