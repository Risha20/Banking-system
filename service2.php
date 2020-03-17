<?php

    session_start();

    include ( "myfunctions.php" );
    include ("account.php");

    $db = mysqli_connect($hostname, $username, $password, $project);

    
    if(!isset($_SESSION ["logged"])){
        echo "<br>please login. <br><br>";
        header ("refresh; 2; url=auth.html");
        exit();
    }

    $ucid = $_SESSION["ucid"];
    $choice = safe("choice");
    
    
    $account = safe("account");
    $amount = safe("amount");
    $number = safe("number");

    //echo "$number";

    if ($choice == "list") {
        get($ucid,$number); 
    }
    if ($choice == "perform") {
        transact($ucid,$account,$amount); 
    }
    if ($choice == "clear") { 
        clear($ucid,$account); 
    }


    echo "<a href = \"https://web.njit.edu/~rjs83/download/logout.php\"> Go to logout.php </a><br><br>";

    echo "<a href = \"https://web.njit.edu/~rjs83/download/service1.php\"> Go to service1.php </a>";

?> 


<style>
    form     { margin: auto; font-family: Georgia, serif;}
    body {

        background: beige; 

    } 

</style>