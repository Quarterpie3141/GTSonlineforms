<?php
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: ../Forms/IR-F.html");
    exit;
} else{
    header("location: ../Index.html");
    exit();
}
?>