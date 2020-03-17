<?php

    include ( "myfunctions.php" );
    include ("account.php");

    session_start();
    if(!isset($_SESSION ["logged"])){
        echo "<br>please login. <br><br>";
        header ("refresh; 2; url=auth.html");
        exit();
    }


    $db = mysqli_connect($hostname, $username, $password, $project);

    $user_pin = safe("pin");
    $original_pin = $_SESSION["pin"];

    if ($user_pin == $original_pin) {
        $_SESSION["pinpass"] = true;
        echo "<br> <strong><center>CORRECT PIN</center></strong><br>";
        header("refresh:2, url=service1.php");
    } else {
        echo "<br> INCORRECT PIN <br>";
        header("refresh:2, url=pin1.php");
    }

?>

<style>
    form     { margin: auto; border: 3px solid brown; padding: 20px; width: 500px; background-color: beige; font-family: Georgia, serif;}
    body {

        background-image: url("NjitBack.jpg");
        margin: auto; background: beige; font-family: Georgia, serif; font-size: 16px; 

    } 

</style>