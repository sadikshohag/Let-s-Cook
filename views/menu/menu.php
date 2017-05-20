<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<html>
    <head>
        <script type="text/javascript" src="../../js/jquery-1.12.3.js"></script>
        <script type="text/javascript" src="../../js/bootstrap.js"></script>
        <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">

        <title></title>
    </head>
    <body>

        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" >
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a >
                        <img src="http://localhost/brighter2morrow/img/gallery/logo3.png" alt="logo" >
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">




                        <!--<li><a href="userlist.php">User List <span class="sr-only">(current)</span></a></li>-->

                        <!--<li><a href="trashlist.php">Trashed Items <span class="sr-only">(current)</span></a></li>-->

                        <!--<li><a href="../../register.php">Add New User <span class="sr-only">(current)</span></a></li>-->

                    </ul>

                    <ul class="nav navbar-nav navbar-right ">
                        <?php
                        if (isset($_SESSION['email']) && !empty($_SESSION['email'])) {
                            if ($_SESSION['is_admin'] == "1") {
                                ?>
                                <li><a href = "http://localhost/brighter2morrow/views/admin/index.php">Dashboard</a></li>
                            <?php } else { ?>

                                <li><a href="http://localhost/brighter2morrow/views/users/index.php">Dashboard</a></li>
                            <?php }
                            ?>
                            <li><a href="http://localhost/brighter2morrow/logOut.php">Log Out</a></li>
                        <?php } else { ?>
                            <li><a href="http://localhost/brighter2morrow/register.php">Registration</a></li>
                            <li><a href="http://localhost/brighter2morrow/login.php">Login</a></li>
                        <?php } ?>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">

                        <li><a href="http://localhost/brighter2morrow/views/common/index.php">Home</a></li>
                        <li><a href="http://localhost/brighter2morrow/views/common/developer.php">About Us</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </body>
</html>