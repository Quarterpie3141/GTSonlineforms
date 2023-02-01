<?php
$servername = "127.0.0.1:3306";
$username = "root";
$password = "";
$dbname = "ir_f_db";

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
    die("Connection with the database failed: " . $conn->connect_error);
}
?>