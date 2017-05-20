<?php
include_once '../../vendor/autoload.php';

use App\cmsArticle;
use App\utility\utility;
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
//        $debug = new utility();
//        $debug->debug($_FILES);


        if (isset($_FILES['image']['name']) && !empty($_FILES['image']['name'])) {
            $image_name = time() . "_" . $_FILES['image']['name'];
            $image_type = $_FILES['image']['type'];
            $image_location = $_FILES['image']['tmp_name'];
            $image_error = $_FILES['image']['error'];
            $image_size = $_FILES['image']['size'];

            $img_name_array = explode(".", $image_name);
            $image_extension = strtolower(end($img_name_array));

            $formate = array('png', 'jpg', 'jpeg');

            if (in_array("$image_extension", $formate)) {
                $_POST['image'] = $image_name;
                $_POST['extention'] = $image_extension;
                $_POST['size'] = $image_size;
                move_uploaded_file($image_location, '../../img/articlePic/' . $image_name);
            } else {
                echo 'wrong file';
            }
        }
//        $debug->debug($_POST);
//        die();

        $addArticle = new cmsArticle();
        $addArticle->setEmail($_POST['email']);
        $addArticle->setArticlevalues($_POST)->addPost();
        ?>
    </body>
</html>
