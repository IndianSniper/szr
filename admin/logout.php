<?php
session_start();
session_destroy();
setcookie("LOGGED_OUT","Successfully logged out.",time() + 3600,"/");
header("Location: http://localhost/szr/admin/");
?>