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
    <title>Art Vault | Community</title>
    <style>
        <?php
            include 'cssFiles/header.css';
            include 'cssFiles/community.css';
        ?>
    </style>
</head>

<body>
    <h1>Welcome to the Community page!</h1>
    <p>This is where you can connect with other members of our community.</p>

    <div class="community">
        <?php
        $sql = "SELECT *
            FROM images
            INNER JOIN users
            ON users.id=images.userID;";
        //$sql = "SELECT * FROM images ORDER BY img_id DESC";
        $sql_text = "SELECT * FROM images ORDER BY img_id DESC";
        $res = mysqli_query($conn, $sql);

        if (mysqli_num_rows($res) > 0) {
            while ($images = mysqli_fetch_assoc($res)) {
                ?>
                <div class="comm">
                    <table>
                        <tr>
                            <td>
                                <img src="uploads/<?= $images['img_url'] ?>" alt="">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div name="image_text"> <?= $images['img_text'] ?> </div>
                            </td>
                        </tr>
                        <tr> <td> <br></td></tr>
                        <tr>
                            <td>
                                <div name="image_user"> Owner: <?= $images['uname'] ?> </div>
                            </td>
                        </tr>
                    </table>
                </div>
                <?php
            }
        }
        ?>
    </div>
</body>