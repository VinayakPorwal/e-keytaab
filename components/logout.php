<?php 
session_start();
$_SESSION=[];
session_unset();
session_destroy();
echo"logout";
// header("location: index.php");