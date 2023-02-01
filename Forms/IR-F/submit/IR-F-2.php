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
}
require_once "../../../Backend/config.php";
$sql = "UPDATE ir_f_db SET Nameofmanager,
F2phone,
F2position,
Reportable,
Reportedtopolice,
Notified,
Reportedtoother,
othername
WHERE 
formid
"