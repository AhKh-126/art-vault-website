<?php 

include 'server.php';
session_start();

if(isset($_SESSION['uname'])){ //Header if the user is logged in
    echo '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type = "text/css" href="cssFiles/header.css">
    </head>
    <body>
        <!--Header Starts-->
        <header class="header">
            <a href="index.php" class = "logo">
                <img src="images/ArtVaultLogo1.png" alt="">
            </a>
    
            <u1 class="navbar">
                <a href="index.php">Home</a>
                <a href="Community.php">Community</a>
                <a href="profile.php">Profile</a>
                <a href="Upload.php">Upload</a>
                <a href="Rules.php">Rules</a>
            </u1>
    
            <div class = "user">

                <h3 style=color:white> Welcome '  .$_SESSION['uname']. '</h3>;
                <a href = logout.php> Logout </a> 

            <div class="bx bx-menu" id="menu-icon"></div>
            </div>
        </header>
        <!--Header Ends-->
    </body>
    </html>';
}
else{  //Header if the user is logged out
    echo '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type = "text/css" href="cssFiles/header.css">
    </head>
    <body>
        <!--Header Starts-->
        <header class="header">
            <a href="index.php" class = "logo">
                <img src="images/ArtVaultLogo1.png" alt="">
            </a>
    
            <u1 class="navbar">
                <a href="index.php">Home</a>
                <a href="Community.php">Community</a>
                <a href="Rules.php">Rules</a>
            </u1>
    
            <div class = "user">
                <a href="login.php" class ="Login">Login</a>
                <a href="register.php" class ="Register">Register</a>
                <div class="bx bx-menu" id="menu-icon"></div>
            </div>
        </header>
        <!--Header Ends-->
    </body>
    </html>';
}
?>