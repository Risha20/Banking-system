<?php
    
    session_start();
    
    include ("myfunctions.php");
    include ("account.php");
    
    error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
    ini_set('display_errors',1);
    
    
    $db = mysqli_connect($hostname, $username, $password, $project);
    
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }
    print "Successfully connected to MySQL.<br><br><br>";
    
    mysqli_select_db( $db, $project );
    
    // $ucid = $_GET ["ucid"]; print "<br>The ucid is $ucid";
    // $pass = $_GET ["pass"]; print "<br>The pass is $pass";
    
    $ucid = safe("ucid");
    $pass = safe("pass");
    
    if(!authenticate($ucid, $pass)) {
        echo "not authenticted.Being redirected to form";
        header("refresh: 2; url=auth.html");
        exit();
    }
    else {
        echo "authenticted. Being redirected to form";
        header("refresh: 2; url=pin1.php");
        exit();
    }
?>

<style>
form     { margin: auto; border: 3px solid brown; padding: 20px; width: 500px; background-color: beige; font-family: Georgia, serif;}
body {
    
    background-image: url("NjitBack.jpg");
margin: auto; background: beige; font-family: Georgia, serif; font-size: 16px;
}

</style>
