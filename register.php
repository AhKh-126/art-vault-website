<?php
    include 'header.php';
    include 'server.php';
?>


<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cssFiles/register.css">
    <title>Register</title>
    </head>

    <body>

        <h2 class="centertxt">Register</h2>

        <form action="register.php" method="post">
        
        <div class="center">
        
        <label for="uname"><b>Username</b></label> 
            </br>
        <input class="center" type="text" placeholder="Enter Username" name="uname" required>
            </br>
            <label for="email"><b>Email</b></label> 
            </br>
        <input class="center" type="text" placeholder="Enter Email" name="email" required>
            </br>
        <label for="passw"><b>Password</b></label> 
            </br>
        <input class="center" type="password" placeholder="Enter Password" name="passw" required>
            </br>
        <label for="passw2"><b>Password Confirmation</b></label> 
            </br>
        <input class="center" type="password" placeholder="Enter Password again" name="passw2"  required>
            </br>
        <input type="checkbox" name="stayLoggedIn" id="stayLoggedIn" value="1">            
        <label for="checkbox">Stay logged in</label>
            </br>
        <button type="submit" name="register">Register</button> 
            </br>
        <span class="log">Already a member? <a href="login.php">Login</a></span>
        </div>

        </form>

    </body>
</html>
