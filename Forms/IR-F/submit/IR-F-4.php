<!DOCTYPE html>
<html>

<head>
<title>Fatal error</title>
<h1>If you are seeing this then something has gone wrong please try again later</h1>
</head>

<?php
session_start();
if( $_POST['formSubmit'] == "Submit"){
    $varwhatchanges = $_POST['whatchanges']; 
    $varadditionaltraining = $_POST['additionaltraining'];
    $varupdateplans = $_POST['updateplans'];
    $varappropiatefeedback = $_POST['appropiatefeedback'];
    $varopportunities = $_POST['opportunities'];
    $varmanagerconsent = $_POST['managerconsent'];
    $frmid = $_POST['formid'];
}

require_once "../../../Backend/config.php";
$sql = "UPDATE ir_f_db SET whatchanges = '$varwhatchanges',
additionaltraining = '$varadditionaltraining',
updateplans = '$varupdateplans',
appropiatefeedback = '$varappropiatefeedback',
opportunities = '$varopportunities',
managerconsent = '$varmanagerconsent',
complete = '1',
assignedto = 'no one'
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