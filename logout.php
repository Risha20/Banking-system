<?php

session_start();
$session_value = session_id();
echo "<br>Your session id: " . $session_value . "<br>";

$_SESSION = array();
session_destroy();
setcookie("PHPSESSID","",time()-3600);
echo "Your session has been terminated";

?>

<style>
    form     { margin: auto; border: 3px solid brown; padding: 20px; width: 500px; background-color: beige; font-family: Georgia, serif;}
    body {

        margin: auto; background: beige; font-family: Georgia, serif; font-size: 16px; 
        
    } 

</style>
