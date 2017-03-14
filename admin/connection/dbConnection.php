<?php

$host="localhost";
$username="root";
$password="";
$dbname="szrdb";

$conn=new mysqli($host,$username,$password,$dbname);

if($conn->connect_error){
	die("Connection with database failed :".$conn->connect_error);
	}

?>