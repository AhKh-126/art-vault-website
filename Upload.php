<?php
    include_once 'header.php';

    if(isset($_POST['submit']) && isset($_FILES['my_image'])) {

        //Include database connection php file
        include 'db_conn_file.php';

        /* This is from I get all the necessesary image values
        echo '<pre>';
        print_r($_FILES['my_image']);
        echo '</pre>';
        */

        //Get important file informations
        $tmp_name = $_FILES['my_image']['tmp_name'];

        $img_name = $_FILES['my_image']['name'];
        $img_text = $_POST['textbox'];
        $img_size = $_FILES['my_image']['size'];

        
        //Image width and height
        list($img_width, $img_height) = getimagesize($tmp_name);

        $error = $_FILES['my_image']['error'];

        if($error == 0) {
            //If the size is bigger than 1GB, throw exception
            if($img_size > 1000000000) {
                echo "<p style='font-size: 20px;'>Sorry, your file is too large!</p>";
            }
            //else if the image is not 600x600 pixel, throw exception
            
            /*else if ($img_width != 600 || $img_height != 600){
                echo "<p style='font-size: 20px;'>Sorry, your file must be 600x600 pixel!</p>";
            }*/
            
            else {
                /*This will give us the type of the uploaded file
                * txt png jpg etc.
                */
                $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
                $img_ex_lc = strtolower($img_ex);

                //Allowed file types that you can upload
                $allowed_exs = array("jpg","jpeg","png");

                //If the file type is acceptable
                if(in_array($img_ex_lc,$allowed_exs)) {
                    //If all the conditions are correct give the file an unique ID and it's file format
                    //IMG-Uniqueid.fileformat
                    $new_img_name = uniqid("IMG",true).'.'.$img_ex_lc;

                    //Create a path for the uploaded file
                    $img_upload_path = 'uploads/'.$new_img_name;

                    //Move the file to uploads folder
                    move_uploaded_file($tmp_name,$img_upload_path);

                    //Insert this uploaded file into database
                    $sql = "INSERT INTO images(img_url,img_text,userID) VALUES ('$new_img_name','$img_text','$_SESSION[id]')";

                    mysqli_query($conn, $sql);
                    header("Location: Community.php");
                }
                //If the file is not supported, throw exception
                else {
                    echo "<p style='font-size: 20px;'>File type must be either JPG, JPEG or PNG!</p>";
                }
            }
        }
        //If the error != 0, throw exception
        else {
            echo "<p style='font-size: 20px;'>unknow error occurred!</p>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Art Vault</title>
    <link rel="stylesheet" type = "text/css" href="cssFiles/header.css">
    <link rel="stylesheet" type = "text/css" href="cssFiles/upload.css">
    <script src="jsFiles/upload.js"></script>
    
</head>
<body>
    <div class ="div">
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <table class="table">
                <tr>
                    <td>
                        Select File
                    </td>
                    <td>
                        <input type="file" name="my_image" onchange="validateForm()">
                    </td>
                </tr>
                <tr>
                    <td>
                        Enter Text
                    </td>
                    <td>
                        <textarea id="textbox" name="textbox" rows="10" cols="50" maxlength="1500" onchange="validateForm()"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>

                    </td>
                    <td>
                        <input type="checkbox" name="eule" id="eule" onchange="validateForm()"> I certify that I created this artwork
                        
                    </td>
                </tr>
                <tr>
                    <td>

                    </td>
                    <td>
                    <input type="submit" name="submit" value="Upload" disabled>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>