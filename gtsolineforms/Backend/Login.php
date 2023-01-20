<?php
session_start();

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: ../Forms/IR-F.html");
    exit;
}

require_once "config.php";

if(empty(trim($_POST["username"]))){
    $username_err = "Please enter username.";
} else{
    $username = trim($_POST["username"]);
}

?>