<?php
include_once '../../vendor/autoload.php';
session_start();

use App\cmsArticle;
use App\utility\utility;

if (isset($_SESSION['email']) && !empty($_SESSION['email'])) {
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
            <div class="navbar">
                <?php include_once '../common/top_menu.php'; ?>
            </div>
            <!-- start: Header -->

            <div class="container-fluid-full">
                <div class="row-fluid">

                    <!-- start: Main Menu -->
                    <?php include_once './U_sideBar.php'; ?>
                    <!-- end: Main Menu -->


                    <!-- start: Content -->
                    <div id="content" class="span10">
                        <ul class="breadcrumb">
                            <li>
                                <i class="icon-home"></i>
                                <a href="index.html">Home</a> 
                                <i class="icon-angle-right"></i>
                            </li>
                            <li><a href="#">Dashboard</a></li>
                        </ul>
                        <div class="row-fluid">
                        </div>		
                        <div class="row-fluid">
                        </div>
                        <div class="row-fluid">
                            <div class="container-fluid">
                                <!-- Brand and toggle get grouped for better mobile display -->
                            </div>

                            <!-- Main Content -->
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                                        
                                    </div>
                                </div>
                            </div>

                            <hr>
                        </div>

                    </div><!--/.fluid-container-->

                    <!-- end: Content -->
                </div><!--/#content.span10-->
            </div><!--/fluid-row-->


            <div class="clearfix"></div>


            <footer>

                <p>
                    <span style="text-align:center;float:right;">&copy; 2016 <a href="http://www.facebook.com/sol.bd/" target="_blank" alt="Bootstrap_Metro_Dashboard">Brighter2morrow Group, BITM</a></span>

                </p>

            </footer>

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