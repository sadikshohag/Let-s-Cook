<!DOCTYPE html>
<?php
include_once '../../vendor/autoload.php';
session_start();

use App\cmsArticle;
use App\Utility\Utility;

if (isset($_SESSION['email']) && !empty($_SESSION['email']) && $_SESSION['is_admin'] == '1') {
    $obj = new cmsArticle();
    $allUser = $obj->setEmail($_SESSION['email'])->userList();
    $debug = new utility();
//    $debug->debug($allUser);
//die();
    ?>



    <html lang="en">
        <head>
            <!-- start: Meta -->
            <meta charset="utf-8">
            <title>Brighter2morrow</title>
            <!-- end: Meta -->
            <!-- start: Mobile Specific -->
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <!-- end: Mobile Specific -->
            <!-- start: CSS -->
            <link id="bootstrap-style" href="../../css/cssMine/bootstrap.min.css" rel="stylesheet">
            <!--<link href="../../css/cssMine/bootstrap-responsive.min.css" rel="stylesheet">-->
            <link id="base-style" href="../../css/cssMine/style.css" rel="stylesheet">
            <link id="base-style-responsive" href="../../css/cssMine/style-responsive.css" rel="stylesheet">
            <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
            <!-- end: CSS -->

            <!-- start: Favicon -->
            <link rel="shortcut icon" href="../../img/gallery/logo3.png">
            <!-- end: Favicon -->
        </head>
        <body>
            <!-- start: Header -->
            <?php include_once '../common/top_menu.php'; ?>
            <!-- start: Header -->
            <!-- start: Main Menu -->
            <?php include_once './sideBar.php'; ?>
            <!-- end: Main Menu -->

            <div id="content" class="span10">
                <br><br>
                <div style="text-align: center" >
                    <h2 style="text-align:center ">Users List</h2>  
                </div>
                <table class="table table-striped" style="animation: ease">
                    <thead >
                        <tr class="success">
                            <th style="text-align:center;">Serial</th>
                            <th style="text-align:center;">User Name</th>
                            <th style="text-align:center;">Email</th>
                            <th style="text-align:center;" >Action</th>
                            <th style="text-align:left;" >Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (isset($allUser) && !empty($allUser)) {
                            $serial = 0;
                            foreach ($allUser as $oneUser) {
                                $serial++;
                                ?>
                                <tr>
                                    <td style="text-align:center;"><?php echo $serial; ?></td>
                                    <td style="text-align:left;"><?php echo $oneUser['username'] ?></td>
                                    <td style="text-align:left;"><?php echo $oneUser['email'] ?></td>
                                    <td >
                                        <form method="POST" action="user_action.php?email=<?php echo $oneUser['email'] ?>" style="text-align:center;">

                                            <?php if ($oneUser['is_active'] === "1") { ?>
                                                <input type="submit" class="btn btn-danger" value="Inactive" name="disable"/>      
                                                <?php
                                            } else {
                                                ?>
                                                <input  type="submit" class="btn btn-success" value="Active" name="enable"/>
                                            <?php }
                                            ?>
                                            <input type="hidden"  value="<?php echo $oneUser['id'] ?>" name="id"/>

                                        </form>
                                    </td>
                                    <td>
                                        <?php
                                        if ($oneUser['is_active'] === "1") {
                                            echo "Active";
                                        } else {
                                            echo "Inactive";
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <?php
                            }
                        } else {
                            echo 'No data';
                        }
                        ?>

                    </tbody>
                </table>
                <div class="container col-md-2"></div>

            </div>

        </body>
    </html>
    <?php
}?>

    
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