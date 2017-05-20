<?php
include_once '../../vendor/autoload.php';
session_start();

use App\cmsArticle;
use App\utility\utility;

if (isset($_SESSION['email']) && !empty($_SESSION['email'])) {

    $Article = new cmsArticle();
    $articleAmount = $Article->countArticle();
    $userData = $Article->getPendingUser();

    $newRegister = $Article->countNewUser();


//    $debug = new utility();
//    $debug->debug($newRegister);
    $counter = 0;
    ?>
    <!DOCTYPE html>
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
            <link href="../../css/cssMine/bootstrap-responsive.min.css" rel="stylesheet">
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

            <!-- start: Content -->
            <div id="content" class="span10">
                <div class="span1"  >
                </div>
                <div class="row-fluid">
                    <div class="box black span5"  >
                        <div class="box-header">
                            <h2><i class="halflings-icon white list"></i><span class="break"></span>Statistics</h2>
                            <div class="box-icon">
                                <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                                <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
                            </div>
                        </div>
                        <div class="box-content">
                            <ul class="dashboard-list metro">
                                <li>
                                    <a href="#">
                                        <i class="icon-arrow-up green"></i>                               
                                        <strong><?php echo $articleAmount['COUNT(`id`)']; ?></strong>
                                        All Article                                   
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-arrow-up green"></i>                               
                                        <strong><?php echo $userData['ID']; ?></strong>
                                        Pending User                                  
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div><!--/span-->

                    <div class="box black span5">
                        <div class="box-header">
                            <h2><i class="halflings-icon white user"></i><span class="break"></span>Last Users</h2>
                            <div class="box-icon">
                                <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                                <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
                            </div>
                        </div>
                        <div class="box-content">
                            <ul class="dashboard-list metro">
                                <?php
                                foreach ($newRegister as $oneRegister) {
                                    if ($counter <= 5) {
                                        $counter ++;
                                        ?>
                                        <li class="grey">
                                            <a href="#">
                                                <img class="avatar" alt="Dennis Ji" src="../../img/avatar.jpg">
                                            </a>
                                            <div style="color: black"><strong>Name: </strong><?php echo $oneRegister['username']; ?><br></div>
                                            <div style="color: black">
                                                <strong>Since:</strong> <?php
                                                $date = date_create($oneRegister["created_at"]);
                                                echo date_format($date, "F d Y h:i");
                                                ?>
                                                <br>
                                                <strong>Status:</strong> Approved             
                                            </div>
                                        </li>
                                        
                                        <?php 
                                    } }
                                        ?>
                                    </ul>
                                </div>
                            </div><!--/span-->

                            <!--                    <div class="box black span4 noMargin" onTablet="span12" onDesktop="span4">
                                                    <div class="box-header">
                                                        <h2><i class="halflings-icon white check"></i><span class="break"></span>To Do List</h2>
                                                        <div class="box-icon">
                                                            <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                                                            <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="box-content">
                                                        <div class="todo metro">
                                                            <ul class="todo-list">
                                                                <li class="red">
                                                                    <a class="action icon-check-empty" href="#"></a>	
                                                                    Windows Phone 8 App 
                                                                    <strong>today</strong>
                                                                </li>
                                                                <li class="red">
                                                                    <a class="action icon-check-empty" href="#"></a>
                                                                    New frontend layout
                                                                    <strong>today</strong>
                                                                </li>
                                                                <li class="yellow">
                                                                    <a class="action icon-check-empty" href="#"></a>
                                                                    Hire developers
                                                                    <strong>tommorow</strong>
                                                                </li>
                                                                <li class="yellow">
                                                                    <a class="action icon-check-empty" href="#"></a>
                                                                    Windows Phone 8 App
                                                                    <strong>tommorow</strong>
                                                                </li>
                                                                <li class="green">
                                                                    <a class="action icon-check-empty" href="#"></a>
                                                                    New frontend layout
                                                                    <strong>this week</strong>
                                                                </li>
                                                                <li class="green">
                                                                    <a class="action icon-check-empty" href="#"></a>
                                                                    Hire developers
                                                                    <strong>this week</strong>
                                                                </li>
                                                                <li class="blue">
                                                                    <a class="action icon-check-empty" href="#"></a>
                                                                    New frontend layout
                                                                    <strong>this month</strong>
                                                                </li>
                                                                <li class="blue">
                                                                    <a class="action icon-check-empty" href="#"></a>
                                                                    Hire developers
                                                                    <strong>this month</strong>
                                                                </li>
                                                            </ul>
                                                        </div>	
                                                    </div>
                                                </div>-->
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
        }
        ?>