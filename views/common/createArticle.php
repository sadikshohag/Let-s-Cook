<?php
session_start();

if (isset($_SESSION['email']) && !empty($_SESSION['email'])) {

    $conn = mysql_connect('localhost', 'root', '') or die('can nit connect to DB');
    mysql_select_db('brighter2morrow', $conn) or die('can not connect to db');

    function build_category_tree(&$output, $preselected, $parent = 0, $indent = "") {
        $r = mysql_query("SELECT `id`,`title` FROM `categories` WHERE `parent_id` =" . $parent . "");

        while ($c = mysql_fetch_array($r, MYSQL_ASSOC)) {
            $selected = ($c["id"] == $preselected) ? "selected=\"selected\"" : "";
            $output .= "<option value=\"" . $c["id"] . "\" " . $selected . ">" . $indent . $c["title"] . "</option>";
            if ($c["id"] != $parent) {
                build_category_tree($output, $preselected, $c["id"], $indent . "&nbsp;&nbsp;");
            }
        }
    }

    build_category_tree($categories, 0);
// if you want to preselect a value and start from some subcategory
    build_category_tree($categories, 5, 2);
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
            <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
            <script>tinymce.init({selector: 'textarea'});</script>
            <!-- end: CSS -->

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
                <?php include_once '../users/U_sideBar.php';
            }
            ?>

            <!-- end: Main Menu -->

            <!-- start: Content -->
            <div id="content" class="span10">
                <div class="row-fluid">
                    <div class="span1"  >
                        <!--<h3>Category</h3>-->
                    </div>
                    <div class="box span8"  >
                        <div class="box-header">
                            <h2><span class="break"></span>Add New Article</h2>
                        </div>
                        <div class="box-content">
                            <div class="form-group" >
                                <div class="panel panel-default">
                                    <div class="panel-body ">
                                        <form class="" role="form" action="addPost.php" method="post" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="title">Article Title:</label><br/>
                                                <input class="form-control"  type="text" id="title" name="title" placeholder="Article Title"/><br/>
                                            </div>
                                            <div class="form-group">
                                                <label for="subtitle">Sub Title:</label><br/>
                                                <input  class="form-control" type="text" id="subtitle" name="subtitle" placeholder="Sub Title"/><br/>
                                            </div>
                                            <div class="form-group">
                                                <label for="category">Select Category</label><br/>
                                                <!--<input  class="form-control" type="text" id="category" name="category" placeholder="Select Category"/><br/>-->
                                                <select class="form-control" id="category" name="category" placeholder="Select Category"><?php echo $categories ?></select>
                                            </div>
                                            <div class="form-group">
                                                <label>Summary:</label><br/>
                                                <textarea id="summary" name="summary"></textarea><br/>
                                            </div>
                                            <div class="form-group">
                                                <label>Description:</label><br/>
                                                <textarea id="desc" name="description"></textarea><br/>
                                            </div>
                                            <div class="form-group">
                                                <label for="image">Upload Picture</label>
                                                <input type="file" name="image" id="image"/><br/><br/>
                                            </div>
                                            <div class="form-group">  
                                                <input type="submit" name="submit" value="Add Article"/>
                                                <input type="reset" value="Reset"/>
                                                <input type="hidden" name="email" value="<?php echo $_SESSION['email']; ?>"/>
                                            </div> 
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--                    <div class="box black span2"  >
                                            <h3>Category</h3>
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
}?>