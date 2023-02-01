<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="GoodTurnServices online forms">
    <meta name="keywords" content="GoodTurnServices">
    <meta name="author" content="Prashan Wijesinghe">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Login.css">   
    <link href="../css/bootstrap_norm.min.css" rel="stylesheet">
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.9.1.min.js" type="text/javascript"></script>
</head>
<?php
require_once '../vendor/autoload.php';
use Office365\Runtime\Auth\UserCredentials;
use Office365\SharePoint\ClientContext;
$siteUrl = "https://goodturnservices.sharepoint.com";
$relativeUrl = "/sites/GTS/Sharepoint/10. IT/Test_folder";
$username = "it@goodturnservices.com.au";
$password = "Jal23533";
$credentials = new UserCredentials("{$username}", $password);
$client = (new ClientContext("{$siteUrl}{$relativeUrl}"))->withCredentials($credentials);

$file_path = "../Backend/Example.txt";
$targetFolder = "{$relativeUrl}/Sharepoint/10. IT/Test_folder";
$targetFile = $file_path;

$fileContent = file_get_contents($file_path);
try{
 Office365\SharePoint\File::saveBinary($client, $targetFile,$fileContent);   
}
catch(Exception $e){
    echo 'Message: ' . $e->getMessage();
    echo var_dump(get_class($e));
}

die("Not Working");
?>
