<?php
    
    session_start();
    
    // error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
    // ini_set('display_errors',1);
    
    include ( "myfunctions.php" );
    
    if(!isset($_SESSION ["logged"])){
        echo "<br>please login. <br><br>";
        header ("refresh; 2; url=auth.html");
        exit();
    }
    
    echo "<br><center><h3>You have been admitted to the next block.</h3></center>";
    $pin = mt_rand(1000,9999);
    echo "<br>pin is: $pin<br>";
    $_SESSION["pin"]=$pin;
    
    $to = "rjs83@njit.edu";
    $subj = "pin";
    $msg = $pin;
    mail($to, $subj, $msg);
    
    ?>
<form action= "pin2.php" >
<input type = text name ="pin" > Enter mailed pin <br>
<input type = submit >

</form>

<style>
form     { margin: auto; border: 3px solid brown; padding: 20px; width: 500px; background-color: beige; font-family: Georgia, serif;}
body {
    
    background-image: url("NjitBack.jpg");
margin: auto; background: beige; font-family: Georgia, serif; font-size: 16px;
    
}

</style>
