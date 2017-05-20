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
    <html>
        <head>
            <meta charset="UTF-8">
            <title>Create Article</title>
            <link id="base-style" href="../../css/cssMine/style.css" rel="stylesheet">
            <link id="base-style-responsive" href="../../css/cssMine/style-responsive.css" rel="stylesheet">
            <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
            <script>tinymce.init({selector: 'textarea'});</script>
            <script src="../../js/jquery-1.12.3.js" type="text/javascript"></script>
            <script src="../../js/bootstrap.js" type="text/javascript"></script>
            <link href="../../css/bootstrap-theme.css" rel="stylesheet" type="text/css"/>
            <link href="../../css/bootstrap.css" rel="stylesheet" type="text/css"/>
            <!--<link id="bootstrap-style" href="../../css/cssMine/bootstrap.css" rel="stylesheet">-->
            <!--<link href="../../css/cssMine/bootstrap-responsive.min.css" rel="stylesheet">-->
            <!--<link id="base-style" href="../../css/cssMine/style.css" rel="stylesheet">-->
            <!--<link id="base-style-responsive" href="../../css/cssMine/style-responsive.css" rel="stylesheet">-->
            <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>


            <!-- start: Favicon -->
            <link rel="shortcut icon" href="../../img/gallery/logo3.png">
            <!-- end: Favicon -->
        </head>
        <body>
            <?php include_once '../common/top_menu.php'; ?>
            <?php include_once '../admin/sideBar.php'; ?>
            <div id="content" class="span10">
                <div class="">
                    <h3 class="text-center">Add New Article</h3>
                    <div class="form-group" >
                        <div class="panel panel-default">
                            <div class="panel-body ">
                                <form class="" role="form" action="addPost.php" method="post">
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
                                        <input type="submit" name="submit" value="Add Post"/>
                                        <input type="reset" value="Reset"/>
                                        <input type="hidden" name="email" value="<?php echo $_SESSION['email']; ?>"/>
                                    </div> 
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
            <?php ?>
        </body>
    </html>
    <?php
} else {
    header("location:../../login.php");
}
?>