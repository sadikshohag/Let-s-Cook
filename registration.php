<?php
include_once './vendor/autoload.php';

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
        if ($_POST['password'] == $_POST['confirm_password']) {
            $userName = $_POST['username'];
            $email = $_POST['email'];

            $register = new cmsArticle();
            $Verification = $register->setValues($_POST)->logIn();

            $debug = new utility();
//            $debug->debug($Verification);
//            die();
            if ($Verification['username'] == $userName || $Verification['email'] == $email) {
                header('location:register.php');
            } else {
                $register->setValues($_POST)->registration();
                $debug->debug($_POST);
            }
        } else {
            session_start();
            $_SESSION['msg'] = "Do not match password";
            header("location:register.php");
        }
        ?>
    </body>
</html>
