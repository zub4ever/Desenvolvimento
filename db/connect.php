<?php
$host = "localhost";
$db   = "sisap_web";
$user = "root";
$pass = "";

$con = mysqli_connect($host, $user, $pass) or trigger_error(mysqli_error(),E_USER_ERROR); 
mysqli_select_db($con, $db);

?>
