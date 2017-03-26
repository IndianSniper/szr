<?php

$to = "info@szrinteriors.com";
$subject = $_POST['subject']."-".$_POST['username'];
$txt = $_POST['contact_message']." contact details :".$_POST['phone']." ".$_POST['company'];
;
$headers = "From: ".$_POST['email']."\r\n" .
"CC: szrinterior2017@gmail.com;

mail($to,$subject,$txt,$headers);
setcookie('SENT', 'Message sent!', time() + 3600, "/");
header("Location: http://rajgraphic.in/contactus.php");
?>