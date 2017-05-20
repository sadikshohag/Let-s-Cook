<?php
include_once '../../vendor/autoload.php';
session_start();

use App\cmsArticle;
use App\utility\utility;

if (isset($_SESSION['email']) && !empty($_SESSION['email'])) {
    $profile = new cmsArticle();
    $userData = $profile->setEmail($_SESSION['email'])->profile();
    $userImage = $profile->getImage();
    $userArtcileInfo = $profile->setId($userData['user_id'])->getProfileArtcile();

    $debug = new utility();
    $debug->debug($_GET);
    ?>
    <!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <title>Brighter2morrow</title>
            <link href="../../css/bootstrap-theme.css" rel="stylesheet" type="text/css"/>
            <link href="../../css/bootstrap.css" rel="stylesheet" type="text/css"/>
            <link href="../../css/style.css" rel="stylesheet" type="text/css"/>
            <script src="../../js/bootstrap.js" type="text/javascript"></script>
            <script src="../../js/jquery-1.12.3.js" type="text/javascript"></script>
            <script src="../../js/npm.js" type="text/javascript"></script>
            <!-- start: Favicon -->
            <link rel="shortcut icon" href="../../img/gallery/logo3.png">
            <!-- end: Favicon -->
        </head>
        <body>
            <!-- start: Favicon -->
            <?php include_once '../menu/menu.php'; ?>
            <!-- end: Favicon -->
            <div class="container-fluid">
                <div class="row-fluid">

                </div>
                <div class="col-md-8">
                    <div class="panel panel-default">
                        <h3 class="text-center">Profile Information</h3>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6 col-lg-offset-3 text-center">
                                    <img src="../../img/profile_pic/<?php echo $userImage['image_name']; ?>" width="200" height="200">                            
                                </div>
                            </div>
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <td>Name</td>
                                        <td><?php echo $userData['first_name'] . " " . $userData['last_name']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Personal Phone Number</td>
                                        <td><?php echo $userData['personal_phone']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Home Number</td>
                                        <td><?php echo $userData['home_phone']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Office Number</td>
                                        <td><?php echo $userData['office_phone']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Current Address</td>
                                        <td><?php echo $userData['current_address']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Permanent Address</td>
                                        <td><?php echo $userData['permanent_address']; ?></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><a class="btn btn-success" href="edit.php?update=profile">Update</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-default">
                        <h3 class="text-center">User Information</h3>
                        <div class="panel-body">
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <td>User Name</td>
                                        <td><?php echo $userData['username']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td><?php echo $userData['email']; ?></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><a class="btn btn-success" href="edit.php?update=user">Update</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <h3 class="text-center">Article Information</h3>
                        <div class="panel-body">
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <td>Article</td>
                                        <td><a href="#"><?php echo $userArtcileInfo['id']; ?></a></td>
                                    </tr>
                                    <tr>
                                        <td>Comment</td>
                                        <td><?php echo 0; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Likes</td>
                                        <td><?php echo 0; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Report</td>
                                        <td><?php echo 0; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>
        </body>
    </html>
    <?php
} else {
    header("location:../../login.php");
}
?>