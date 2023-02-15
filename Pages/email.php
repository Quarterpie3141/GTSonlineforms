<?php

$retval = mail("it@goodturnservices.com.au", "test", "some test text and other random stuff",);

if($retval == true){
    echo "msg sent";
} else{
    echo "msg not sent";
}
var_dump($retval);
?>