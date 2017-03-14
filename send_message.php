<?php

$to = "contact@rajgraphic.in";
$subject = $_POST['subject']."-".$_POST['name'];
$txt = $_POST['contact_message'];
$headers = "From: ".$_POST['email']."\r\n" .
"CC: contact@rajgraphic.in";

mail($to,$subject,$txt,$headers);
setcookie('SENT', 'Message sent!', time() + 3600, "/");
header("Location: http://rajgraphic.in/contactus.php");
?>