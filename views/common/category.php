<?php
include_once '../../vendor/autoload.php';
session_start();
use App\cmsArticle;
use App\utility\utility;

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
    <!--
    To change this license header, choose License Headers in Project Properties.
    To change this template file, choose Tools | Templates
    and open the template in the editor.
    -->
    <html>
        <head>
            <meta charset="UTF-8">
            <title>Brighter2morrow</title>
            <link href="../../css/bootstrap-theme.css" rel="stylesheet" type="text/css"/>
            <link href="../../css/bootstrap.css" rel="stylesheet" type="text/css"/>
            <link href="../../css/style.css" rel="stylesheet" type="text/css"/>
            <link id="bootstrap-style" href="../../css/cssMine/bootstrap.min.css" rel="stylesheet">
            <link href="../../css/cssMine/bootstrap-responsive.min.css" rel="stylesheet">
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
            <?php
            // put your code here
            ?>
            <div id="content" class="span10">
                <div class="row-fluid">
                    <div class="span1"  >
                        <!--<h3>Category</h3>-->
                    </div>
                    <div class="box span6"  >
                        <div class="box-content">
                            <div class="form-group" >
                                <div class="panel panel-default">
                                    <div class="panel-body ">
                                        <form class="" role="form" action="addCategory.php" method="post">
                                            <div class="form-group">
                                                <label for="category">Select Parent</label><br/>
                                                <!--<input  class="form-control" type="text" id="category" name="category" placeholder="Select Category"/><br/>-->
                                                <select class="form-control" id="category" name="category" placeholder="Select Category">
                                                    <option><?php echo $categories ?></option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="newCategory">Add New Category</label><br/>
                                                <input  class="form-control" type="text" id="newCategory" name="newCategory" placeholder=""/><br/>
                                            </div>
                                            <div class="form-group">  
                                                <input type="submit" name="submit" value="Add Category"/>
                                                <input type="reset" value="Reset"/>
                                            </div> 
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="span2"  >
                        <!--<h3>Category</h3>-->
                    </div>
                    </body>
                    </html>
                    <?php
                }?>