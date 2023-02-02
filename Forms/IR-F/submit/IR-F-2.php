<!DOCTYPE html>
<html>

<head>
<title>Fatal error</title>
<h1>If you are seeing this then something has gone wrong please try again later</h1>
</head>

<?php
session_start();
if( $_POST['formSubmit'] == "Submit"){
    $varnameofmanager = $_POST['nameofmanager']; 
    $varf2phone = $_POST['f2phone'];
    $varf2position = $_POST['f2position'];
    $varreportable = $_POST['reportable'];
    $varreportedtopolice = $_POST['reportedtopolice'];
    $varnotified = $_POST['notified'];
    $varreportedtoother = $_POST['reportedtoother'];
    $varothername = $_POST['othername'];
    $frmid = $_POST['formid'];
    $assignedto = $_POST['assignedto'];
}
var_dump($_POST);
require_once "../../../Backend/config.php";
$sql = "UPDATE ir_f_db SET Nameofmanager = '$varnameofmanager',
F2phone = '$varf2phone',
F2position = '$varf2position',
Reportable = '$varreportable',
Reportedtopolice = '$varreportedtopolice',
Notified = '$varnotified',
Reportedtoother = '$varreportedtoother',
othername = '$varothername',
assignedto = '$assignedto'
WHERE 
formid = $frmid
";
if($conn->query($sql) === TRUE){
    echo "Data submitted successfully";
    $conn->close();
    $ch = curl_init("localhost:3000/saveformirf?formid=" . $frmid);
    curl_setopt($ch, CURLOPT_POST, 1);
    // Execute the cURL request
    $result = curl_exec($ch);
    curl_close($ch);
    $_SESSION['datasbm'] = 0; // success code see homepage.php for more details 
    header("Location: ../../../Pages/HomePage.php");
    exit();
} else{
    $_SESSION['datasbm'] = 1; //error code 
    $conn->close();
    echo "Error submitting data: " . $sql . "<br>";
    header("Location: ../../../Pages/HomePage.php");
    exit();
}