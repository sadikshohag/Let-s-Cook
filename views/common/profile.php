<?php
include_once '../../vendor/autoload.php';

session_start();
include_once './top_menu.php';
include_once '../admin/sideBar.php';

use App\cmsArticle;
use App\utility\utility;

if (isset($_SESSION['email']) && !empty($_SESSION['email'])) {
    $profile = new cmsArticle();
    $userData = $profile->setEmail($_SESSION['email'])->profile();
//    $userImage = $profile->getImage();
    $userArtcileInfo = $profile->setId($userData['user_id'])->getProfileArtcile();

    $debug = new utility();
//    $debug->debug($userData);
//    $debug->debug($userArtcileInfo);
    ?>
    <!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <title>Brighter2morrow</title>
            <link href="../../css/bootstrap-theme.css" rel="stylesheet" type="text/css"/>
            <link href="../../css/bootstrap.css" rel="stylesheet" type="text/css"/>
            <link href="../../css/style.css" rel="stylesheet" type="text/css"/>
            <link id="bootstrap-style" href="../../css/cssMine/bootstrap.min.css" rel="stylesheet">
            <!--<link href="../../css/cssMine/bootstrap-responsive.min.css" rel="stylesheet">-->
            <link id="base-style" href="../../css/cssMine/style.css" rel="stylesheet">
            <link id="base-style-responsive" href="../../css/cssMine/style-responsive.css" rel="stylesheet">
            <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
            <!-- end: CSS -->

            <!-- start: Favicon -->
            <link rel="shortcut icon" href="../../img/gallery/logo3.png">
            <!-- end: Favicon -->
            <script src="../../js/bootstrap.js" type="text/javascript"></script>
            <script src="../../js/jquery-1.12.3.js" type="text/javascript"></script>
            <script src="../../js/npm.js" type="text/javascript"></script>
            <!-- start: Favicon -->
            <link rel="shortcut icon" href="../../img/gallery/logo3.png">
            <!-- end: Favicon -->
        </head>
        <body>

            <div class="container">
                <div class="row-fluid">

                </div>
                <div class="col-md-8">
                    <div class="panel panel-default">
                        <h3 class="text-center">Profile Information</h3>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6 col-lg-offset-3 text-center">
                                    <img src="../../img/profile_pic/<?php echo $userData['profile_pic']; ?>" width="200" height="200">                            
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
            <script src="../../js/jsMine/jquery-1.9.1.min.js"></script>
            <script src="../../js/jsMine/jquery-migrate-1.0.0.min.js"></script>

            <script src="../../js/jsMine/jquery-ui-1.10.0.custom.min.js"></script>

            <script src="../../js/jsMine/jquery.ui.touch-punch.js"></script>

            <script src="../../js/jsMine/modernizr.js"></script>

            <script src="../../js/jsMine/bootstrap.min.js"></script>

            <script src="../../js/jsMine/jquery.cookie.js"></script>

            <script src='../../js/jsMine/fullcalendar.min.js'></script>

            <script src='../../js/jsMine/jquery.dataTables.min.js'></script>

            <script src="../../js/jsMine/excanvas.js"></script>
            <script src="../../js/jsMine/jquery.flot.js"></script>
            <script src="../../js/jsMine/jquery.flot.pie.js"></script>
            <script src="../../js/jsMine/jquery.flot.stack.js"></script>
            <script src="../../js/jsMine/jquery.flot.resize.min.js"></script>

            <script src="../../js/jsMine/jquery.chosen.min.js"></script>

            <script src="../../js/jsMine/jquery.uniform.min.js"></script>

            <script src="../../js/jsMine/jquery.cleditor.min.js"></script>

            <script src="../../js/jsMine/jquery.noty.js"></script>

            <script src="../../js/jsMine/jquery.elfinder.min.js"></script>

            <script src="../../js/jsMine/jquery.raty.min.js"></script>

            <script src="../../js/jsMine/jquery.iphone.toggle.js"></script>

            <script src="../../js/jsMine/jquery.uploadify-3.1.min.js"></script>

            <script src="../../js/jsMine/jquery.gritter.min.js"></script>

            <script src="../../js/jsMine/jquery.imagesloaded.js"></script>

            <script src="../../js/jsMine/jquery.masonry.min.js"></script>

            <script src="../../js/jsMine/jquery.knob.modified.js"></script>

            <script src="../../js/jsMine/jquery.sparkline.min.js"></script>

            <script src="../../js/jsMine/counter.js"></script>

            <script src="../../js/jsMine/retina.js"></script>

            <script src="../../js/jsMine/custom.js"></script>
        </body>
    </html>
    <?php
} else {
    header("location:../../login.php");
}
?>