<?php
include_once 'header.php'
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Art Vault | Home</title>
    <style>
        <?php
        include 'cssFiles/Homepage.css';
        ?>
        .toppart {
            background-image: url("images/home-bg.jpg");
        }
    </style>
</head>

<body>
    <section class="toppart">

        <div class="text-box">
            <h1>Welcome to the Art Vault</h1>
            <p>Check out the awesome designs created by ai</p>
            <br><br>
            <!-- BURAYA NE KONULACAK BİLMİYORUM -->
            <a href="Community.php" class="hero-btn">Check out</a>
        </div>

    </section>
    <section>
        <div class="sectiontwo">
            <br> <br>
            <h1> Find the best AI Creations For Your Needs</h1> <br> <br><br>


            <div class="art-container">
                <div class="art-item">

                    <img class="art-image" src="images/aiart1.jpg">
                    <img class="art-image" src="images/aiart2.jpg">
                    <img class="art-image" src="images/aiart3.jpg">
                    <img class="art-image" src="images/aiart4.jpg">
                    <img class="art-image" src="images/aiart5.jpg">
                    <img class="art-image" src="images/aiart6.jpg">
                    <img class="art-image" src="images/aiart7.jpg">
                </div>
    </section>
    <section>
        <div class="sectionthree">
            <p> Find AI created art simply by describing what you want to see</p>
            <br> <br> <br> <br> <br> <br> <br>

        </div>
    </section>

    <section>
        <div class="sectionfour">

            <p>
                Learn how to create the perfect AI drawing<br> by seeing the custom description it was made with
               <br><br>
                Upload and Download thousands of AI art <br>to use for your bussiness or startup project
                <br><br>
                AI Art generation is usually a laborious process that requires<br> technical expertise, we make that
                process
                <br> simple and intuitive.
                <br><br>
                Join thousands of AI artists.
            </p>

            <img class="art-image" src="images/aiart2.jpg">
            <p>"Cyberpunk rave"</p>

        </div>
        <br> <br>
    </section>

</body>

</html>