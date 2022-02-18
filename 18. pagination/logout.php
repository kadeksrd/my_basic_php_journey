<?php 

session_start();
$_SESSION = [];
session_unset();
/*
$SESSION = [];
dan
session_unset();

untuk tambahan apakah session ga bersih
*/
session_destroy();
header("location: login.php");

?>