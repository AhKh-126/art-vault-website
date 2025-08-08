<?php

include 'db_conn_file.php';

//Register server code

if (array_key_exists("register", $_POST)) {

    //Taking from User
    $uname = mysqli_real_escape_string($conn, $_POST['uname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['passw']);
    $password2 = mysqli_real_escape_string($conn, $_POST['passw2']);

    //Check if email and username already exist in the Database

    $query = "SELECT id FROM users WHERE email = '$email' ";
    $query2 = "SELECT id FROM users WHERE uname = '$uname' ";
    $result = mysqli_query($conn, $query);
    $result2 = mysqli_query($conn, $query2);

    if ($password !== $password2) { //check if password verfication exists
        echo "<p style='color:red;'>Password does not match! </p>";
    } elseif (mysqli_num_rows($result) > 0) {
        echo "<p style='color:red;'>Your email is already taken!</p>";
    } elseif (mysqli_num_rows($result2) > 0) {
        echo "<p style='color:red;'>Your username is already taken! </p>";
    } else {

        $query = "INSERT INTO users (uname, email, passw) VALUES ('$uname', '$email', '$password')";


        if (!mysqli_query($conn, $query)) {
            echo "<p style='color:red;'>Could not sign you up, please try again.</p>";
        } else if (!mysqli_query($conn, $query2)) {
            echo "<p style='color:red;'>Could not sign you up, please try again.</p>";
        } else {

            //Setcookie function to keep user logged in for long time
            if ($_POST['stayLoggedIn'] == '1') {
                session_start();
                //session variables to keep user logged in
                $_SESSION['id'] = mysqli_insert_id($conn);
                $_SESSION['uname'] = $uname;
                setcookie('id', mysqli_insert_id($conn), time() + 60 * 60 * 365);
                header("Location: index.php"); //Redirecting user to home page if he stayed logged in 
            } else {
                header("Location: login.php"); //Redirecting user to login because he didn't stay logged in

            }
        }
    }
}


//Login server code
if (array_key_exists("login", $_POST)) {

    //Taking form Data From User
    $uname = mysqli_real_escape_string($conn, $_POST['uname']);
    $password = mysqli_real_escape_string($conn, $_POST['passw']);

    //matching email and password
    $query = "SELECT * FROM users WHERE uname='$uname'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);

    if (isset($row)) {

        if ($password == $row['passw']) {

            session_start();

            //session variables to keep user logged in
            $_SESSION['id'] = $row['id'];
            $_SESSION['uname'] = $uname; //for user name to appear 
            header("Location: index.php");

            //Logged in for long time untill user didn't log out
            if ($_POST['stayLoggedIn'] == '1') {
                setcookie('id', $row['id'], time() + 60 * 60 * 24); //Logged in permanently
            }

        } else {
            echo "<p style='color:red;'>Password does not match!</p>";
        }

    } else {
        echo "<p style='color:red;'>Username does not match!</p>";
    }
}
?>