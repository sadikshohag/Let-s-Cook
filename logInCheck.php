<?php
include_once './vendor/autoload.php';

use App\cmsArticle;
use App\utility\utility;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <a href=""></a>
        <?php
        $debug = new utility();

        $email = $_POST['email'];
        $password = $_POST['password'];

        $checkEmail = new cmsArticle();
        $emailVerification = $checkEmail->setValues($_POST)->logIn();

//        $debug->debug($emailVerification);
//        die();
        if (empty($emailVerification['is_active']) && !isset($emailVerification['is_active'])) {
            session_start();
            $_SESSION['msg'] = "Sorry Ur id is not activated yet";
            ob_clean();
            ob_flush();
            @header('Location: login.php');
            echo "<script>window.location = 'login.php';</script>";
        } else {
            if (!empty($emailVerification['email'])) {
                if ($emailVerification['password'] = $password) {
                    session_start();
                    $_SESSION['email'] = $emailVerification['email'];
                    $_SESSION['is_admin'] = $emailVerification['is_admin'];
                    if ($_SESSION['is_admin'] == '1') {
                        header("location:views/admin/index.php");
                    } else {
                        header("location:views/users/index.php");
                    }
                } else {
                    header("location:login.php");
                }
            } else {
                header("location:login.php");
            }
        }
        ?>
    </body>
</html>
