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
        $debug = new utility();
        $debug->debug($_POST);
        $debug->debug($_FILES);
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
                move_uploaded_file($image_location, '../../img/profile_pic/' . $image_name);
            } else {
                echo 'wrong file';
            }
            $oldPic = '../../img/profile_pic/' . $_POST['oldPic'];
            if (isset($_POST['oldPic']) && !empty($_POST['oldPic'])) {
                unlink($oldPic);
            }
        }
//        die();

        $update = new cmsArticle();
        $userData = $update->setEmail($_POST['email'])->logIn();
        $debug->debug($userData);
//        die();
        if ($_POST['submit'] == "Update Profile") {
            if (isset($_POST['id'])) {
                $update->setId($_POST['id']);
            }
            $update->setFlag($_POST['submit']);
            $update->setProfileValues($_POST);
            if ($userData['complete_profile'] == '0') {
                $update->stroe();
            }
        } else {
            if ($userData['password'] == $_POST['odlpass']) {
                $update->setId($userData['id'])->setFlag($_POST['submit'])->setValues($_POST);
            } else {
                session_start();
                $_SESSION['msg'] = "Wrong Password";
                header("location:edit.php?update=user");
            }
        }
//        $debug->debug($userData);
//        die();
        $update->update();
        ?>
    </body>
</html>
