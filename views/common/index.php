<?php
include_once '../../vendor/autoload.php';
include_once '../../src/getCategory.php';

use App\cmsArticle;
use App\utility\utility;

$getArticleObj = new cmsArticle();
$allArticle = $getArticleObj->getArticle();

$category = $getArticleObj->getCategory();

//$category = new getCategory();
//$category->build_category_tree($categories, 0);
//$category->build_category_tree($categories, 5, 2);
//
//$debug = new utility();
//$debug->debug($allArticle);
//die();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Brighter 2morrow</title>
        <!-- Bootstrap Core CSS -->
        <link href="../../css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="../../css/clean-blog.min.css" rel="stylesheet">
        <!-- Custom Fonts -->
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

        <!-- start: Favicon -->
        <link rel="shortcut icon" href="../../img/gallery/logo3.png">
        <!-- end: Favicon -->
    </head>

    <body>
        <!-- start: Favicon -->
        <?php include_once '../menu/menu.php'; ?>
        <!-- end: Favicon -->
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
        </div>
        <!-- Main Content -->
        <div class="container">
            <div class="row">
                <div class="">
                    <?php
                    foreach ($allArticle as $oneArticle) {
//                        print_r($oneArticle);
//                        die();
                        ?>
                        <div class="post-preview">
                            <a href="post_details.php?id=<?php echo $oneArticle['0']; ?>&username=<?php echo $oneArticle['username']; ?>">
                                <h3 class="">
                                    <?php echo $oneArticle['title']; ?>
                                </h3>
                                <h4 class="post-subtitle">
                                    <?php echo $oneArticle['sub_title']; ?>
                                </h4>
                                <p>
                                    <?php echo strip_tags($oneArticle['html_summary']); ?>
                                </p>
                            </a>
                            <p class="post-meta">Posted by <a href="#"><?php echo $oneArticle['username']; ?></a> on 
                                <?php
                                $date = date_create($oneArticle["8"]);
                                echo date_format($date, "F d Y");
                                ?>
                            </p>
                        </div>
                        <hr>

                    <?php } ?>
                    <ul class="pager">
                        <li class="next">
                            <a href="#">Older Posts &rarr;</a>
                        </li>
                    </ul>
                </div>
                <!--                <div class="col-md-3">
                                    <div class="panel panel-default">
                                        <h3 class="text-center">Category</h3>
                                        <div class="panel-body">
                                            <table class="table table-striped">
                                                <tbody>
                <?php foreach ($category as $value) { ?>
                                                                <tr>
                                                                    <td>Article</td>
                                                                    <td><a href="#"><?php echo $value['title']; ?></a></td>
                                                                </tr>
                <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>-->
            </div>
        </div>

        <hr>
        <!-- Footer -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                        <ul class="list-inline text-center">
                            <li>
                                <a href="#">
                                    <span class="fa-stack fa-lg">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="fa-stack fa-lg">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="fa-stack fa-lg">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <p class="copyright text-muted">Copyright &copy; <a href="">Brighter 2morrow</a></p>
                    </div>
                </div>
            </div>
        </footer>

        <!-- jQuery -->
        <script src="../../js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../../js/bootstrap.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../../js/clean-blog.min.js"></script>
    </body>
</html>
