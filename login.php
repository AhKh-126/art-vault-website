<?php
    include 'header.php';
    include 'server.php';
?>

<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cssFiles/login.css">
    <title>Login</title>
    </head>

    <body>

        <h2 class="centertxt">Login</h2>

        <form action="login.php" method="post">      

        <div class="center">
        <label for="uname"><b>Username</b></label> 
            </br>
        <input class="center" type="text" placeholder="Enter Username" name="uname" required>
            </br>
        <label for="passw"><b>Password</b></label> 
            </br>
        <input class="center" type="password" placeholder="Enter Password" name="passw" required>
            </br>
        <input type="checkbox" name="stayLoggedIn" id="stayLoggedIn" value="1">            
        <label for="checkbox">Stay logged in</label>
            </br>
        <button type="submit" name="login">Login</button> 
            </br>
        <span class="reg">Not a member yet? <a href="register.php">Register</a></span>
        </div>

        </form>

    </body>
</html>
