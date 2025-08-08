<?php
    //xampp database informations
    $sname  = "localhost";
    $uname = "abc";
    $password = "abc";
    $db_name = "group1";

    //Connection with php mysql database
    $conn = mysqli_connect($sname,$uname,$password,$db_name);

    //Give warning if connection fails
    if(!$conn) {
        echo "Connection failed!";
        echo "<br>";
        exit();
    }
?>