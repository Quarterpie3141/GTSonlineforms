<?php
$servername = "34.101.241.129";
$username = "root";
$password = "Quarterpie3141";
$dbname = "ir_f_db";

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
    die("Connection with the database failed: " . $conn->connect_error);
}
?>