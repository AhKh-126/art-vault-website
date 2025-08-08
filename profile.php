<?php

include_once 'header.php';
include 'db_conn_file.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Art Vault | Profile</title>
    <style>
        <?php
        include 'cssFiles/profile.css';
        ?>
    </style>
</head>

<body align="center">
    
    <div id="profileDiv">
        <br>
        <div id="username" align="center">
            <br>
            <?= $_SESSION['uname'] ?>
            <br>
            <br>
        </div>
        <br>
        <div align="center">
            Your works
        </div>
        <br>
        <div id="uploadTable">
            <?php
            $sql = "SELECT *
            FROM images
            WHERE userID=$_SESSION[id]";
            //$sql_text = "SELECT * FROM images ORDER BY img_id DESC";
            $res = mysqli_query($conn, $sql);

            if (mysqli_num_rows($res) > 0) {
                while ($images = mysqli_fetch_assoc($res)) {
                    ?>
                    <div class="profileUploads">
                        <table>
                            <tr>
                                <td>
                                    <img src="uploads/<?= $images['img_url'] ?>" alt="">
                                </td>
                            </tr>
                            
                            <tr>
                                <td>
                                    <div name="image_text" > <?= $images['img_text'] ?> </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <?php
                }
            }
            ?>
        </div>

    </div>
</body>