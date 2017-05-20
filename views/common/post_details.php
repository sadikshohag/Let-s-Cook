<?php
include_once '../../vendor/autoload.php';

use App\cmsArticle;
use App\utility\utility;

$getOneArticleObj = new cmsArticle();
$Article = $getOneArticleObj->setId($_GET['id'])->getPostDetails();

$ArticleImage = $getOneArticleObj->setId($_GET['id'])->getPostDetailsImage();
//$debug = new utility();
//$debug->debug($_GET);
//$debug->debug($ArticleImage);
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
        <div class="content">
            <article>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <h2 class="section-heading"><?php echo $Article['title']; ?></h2>
                        <h3><?php echo $Article['sub_title']; ?></h3>
                        <?php if (isset($ArticleImage['image_name']) && !empty($ArticleImage['image_name'])) { ?>
                            <img src="../../img/articlePic/<?php echo $ArticleImage['image_name']; ?>"/>
                        <?php } ?>
                        <p style="text-align: justify"><?php echo $Article['html_details']; ?></p>
                        <p class="post-meta">Posted by <a href=""><?php echo $_GET['username']; ?></a> on 
                            <?php
                            $date = date_create($Article['created_at']);
                            echo date_format($date, "F d Y");
                            ?>
                        </p>
                    </div>
                </div>
            </article>
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
                            <p class="copyright text-muted">Copyright &copy; Your Website 2014</p>
                        </div>
                    </div>
                </div>
            </footer>

            <!-- jQuery -->
            <script src="js/jquery.js"></script>

            <!-- Bootstrap Core JavaScript -->
            <script src="js/bootstrap.min.js"></script>

            <!-- Custom Theme JavaScript -->
            <script src="js/clean-blog.min.js"></script>

    </body>

</html>
