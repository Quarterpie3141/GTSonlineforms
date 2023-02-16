<!DOCTYPE html>
<html>

<head>
<title>Fatal error</title>
<h1>If you are seeing this then something has gone wrong please report this to it@goodturnservices.com.au and try again later</h1>
</head>

<?php
session_start();
if( $_POST['formSubmit'] == "Submit"){
    $varF3name = $_POST['F3name']; 
    $varF3date = $_POST['F3date'];
    $varF3position = $_POST['F3position'];
    $varF3phone = $_POST['F3phone'];
    $vardaystaken = $_POST['daystaken'];
    $varsummaryoffindings = $_POST['summaryoffindings'];
    $frmid = $_POST['formid'];
}

require_once "../../../Backend/config.php";
$sql = "UPDATE ir_f_db SET F3name = '$varF3name',
F3date = '$varF3date',
F3position = '$varF3position',
F3phone = '$varF3phone',
daystaken = '$vardaystaken',
summaryoffindings = '$varsummaryoffindings',
stage = '4',
complete = '0'
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