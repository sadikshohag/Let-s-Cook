<?php
include_once '../../vendor/autoload.php';
session_start();

use App\cmsArticle;
use App\utility\utility;

if (isset($_SESSION['email']) && !empty($_SESSION['email'])) {
//    $message = $_SESSION['email'];
//    echo "<script type='text/javascript'>alert('Succesfully');</script>";
    ?>   
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <!-- start: Meta -->
            <meta charset="utf-8">
            <title>Brighter 2morrow</title>
            <link id="bootstrap-style" href="../../css/cssMine/bootstrap.min.css" rel="stylesheet">
            <!--<link href="../../css/cssMine/bootstrap-responsive.min.css" rel="stylesheet">-->
            <link id="base-style" href="../../css/cssMine/style.css" rel="stylesheet">
            <link id="base-style-responsive" href="../../css/cssMine/style-responsive.css" rel="stylesheet">
            
            <!--<link href="../../css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>-->
            <!--<link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>-->
            <script src="../../js/bootstrap.js" type="text/javascript"></script>
            <script src="../../js/bootstrap.min.js" type="text/javascript"></script>
            <script src="../../js/npm.js" type="text/javascript"></script>
            <!-- start: Favicon -->
            <link rel="shortcut icon" href="../../img/gallery/logo3.png">
            <!-- end: Favicon -->
        </head>
        <body>
            <!-- start: Header -->
            <?php include_once './top_menu.php'; ?>
            <!-- start: Header -->

            <!-- start: Main Menu -->
            <?php
            if ($_SESSION['is_admin'] == "1") {
                include_once '../admin/sideBar.php';
            } else {
                ?>
                <?php
                include_once '../users/U_sideBar.php';
            }
            ?>

            <!-- end: Main Menu -->

            <!-- start: Content -->
            <div id="content" class="span8">
                <div class="row-fluid">
                    <?php
                    $edit = new cmsArticle();
                    $data = $edit->setEmail($_SESSION['email'])->profile();
//                    $dataImage = $edit->getImage();

                    if ($_GET['update'] == 'profile') {

//            $debug = new utility();
//            $debug->debug($data);
//            die();
                        ?>
                        <div class="container">
                            <h3 class="text-center">Update Profile Information</h3>
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <form role="form" action="update.php" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="fname">First Name:</label>
                                            <input type="text" class="form-control" name="fname" id="fname" placeholder="First Name" value="<?php echo $data['first_name']; ?>"/><br/>
                                        </div>
                                        <div class="form-group">
                                            <label for="lname">Last Name:</label>
                                            <input type="text" class="form-control" name="lname" id="lname" placeholder="Last Name" value="<?php echo $data['last_name']; ?>"/><br/>
                                        </div>
                                        <div class="form-group">
                                            <label for="pno">Personal Phone Number:</label>
                                            <input type="text" class="form-control" name="pno" id="pno" placeholder="01 xxx xxx xxx"  value="<?php echo $data['personal_phone']; ?>"/><br/>
                                        </div>
                                        <div class="form-group">
                                            <label for="hno">Home Number:</label>
                                            <input type="text" class="form-control" name="hno" id="hno" placeholder="01 xxx xxx xxx"  value="<?php echo $data['home_phone']; ?>"/><br/>
                                        </div>
                                        <div class="form-group">
                                            <label for="ono">Office Number:</label>
                                            <input type="text" class="form-control" name="ono" id="ono" placeholder="xxx xxx xxx"  value="<?php echo $data['office_phone']; ?>"/><br/>
                                        </div>
                                        <div class="form-group">
                                            <label for="cAddress">Current Address:</label>
                                            <input type="text" class="form-control" name="cAddress" id="cAddress" placeholder="Street/Village City District"  value="<?php echo $data['current_address']; ?>"/><br/>
                                        </div>
                                        <div class="form-group">
                                            <label for="pAddress">Permanent Address:</label>
                                            <input type="text" class="form-control" name="pAddress" id="pAddress" placeholder="Street/Village City District"  value="<?php echo $data['permanent_address']; ?>"/><br/>
                                        </div>
                                        <div class="form-group">
                                            <label for="image">Upload Profile Picture</label>
                                            <input type="file" name="image" id="image"/><br/><img src="../../img/profile_pic/<?php echo $data['profile_pic']; ?>" width="200" height="200">
                                        </div>
                                        <input type="hidden" name="email" value="<?php echo $_SESSION['email']; ?>"/>
                                        <input type="hidden" name="id" value="<?php echo $data['id']; ?>"/>
                                        <input type="hidden" name="oldPic" value="<?php echo $data['profile_pic']; ?>"/>
                                        <div class="form-group">
                                            <input type="submit" name="submit" value="Update Profile"/>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <?php
                    } else {
//                $editUserInfo = new miniProject();
//                $editUserInfo->setEmail($_SESSION['email']);
//                $dataUser = $editUserInfo->logIn();
//                $debug = new utility();
//                $debug->debug($dataUser);
                        ?>
                        <div class="container">
                            <h3 class="text-center">Update User Information</h3>
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <form role="form" action="update.php" method="post">
                                        <div class="form-group">
                                            <label for="username">User Name:</label>
                                            <input type="text" class="form-control" name="username" id="lname" value="<?php echo $data['username']; ?>" disabled/><br/>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email:</label>
                                            <input type="text" class="form-control" name="email" id="fname" value="<?php echo $data['email']; ?>"/><br/>
                                        </div>
                                        <div class="form-group">
                                            <label for="oldpwd">Old Password:</label>
                                            <input type="password" class="form-control" name="odlpass" id="oldpwd"/><br/>
                                        </div> 
                                        <div class="form-group">
                                            <label for="newpwd">New Password:</label>
                                            <input type="password" class="form-control" name="password" id="newpwd"/><br/>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" name="submit" value="Update User"/>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php }
                    ?>
                </div>
            </div><!--/.fluid-container-->
            <!-- end: Content -->



            <div class="clearfix"></div>

            <!-- start: JavaScript-->

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
            <!-- end: JavaScript-->

        </body>
    </html>
    <?php
} else {
    header("location:../../login.php");
}?>