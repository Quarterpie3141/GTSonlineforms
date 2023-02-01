<?php
session_start();
$_SESSION["loggedin"] = false;
$_SESSION["id"] = "";
$_SESSION["username"] = "";
$_SESSION["Desuri"] = ""; 
session_destroy();
header("location: ../Index.php");
exit;
?>