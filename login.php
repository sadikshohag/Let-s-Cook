<?php session_start(); ?>
<html>
    <head>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <script src="js/bootstrap.js" type="text/javascript"></script>
        <title>Log In</title>
        <!-- start: Favicon -->
        <link rel="shortcut icon" href="img/gallery/logo3.png">
        <!-- end: Favicon -->
    </head>
    <body>
        <?php include_once './views/menu/menu.php'; ?>
        <div class="modal-dialog">
            <div class="loginmodal-container">
                <h1>LogIn</h1><br>
                <form action="logInCheck.php" method="post" >
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="password" name="password" placeholder="Password" required>
                    <input type="submit"  class="login loginmodal-submit" value="LogIn">
                </form>

                <div class="login-help">
                    Not registered? <a href="register.php">Register</a>
                </div>
            </div>
        </div>
        <div>
            <?php
            if (isset($_SESSION['msg'])) {
                ?>
                <div class=" container col-md-4" ></div>
                <div style="text-align: center"  class=" container col-md-4 list-group-item list-group-item-success">
                    <?php
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                }
                ?>
            </div>
        </div>
        <div style="text-align: center" >
            <?php
            if (isset($_SESSION['login'])) {
                ?>
                <div class=" container col-md-4"></div>
                <div  class=" container col-md-4 list-group-item list-group-item-success">
                    <?php
                    echo $_SESSION['login'];
                    unset($_SESSION['login']);
                }
                ?>
            </div>
        </div>

    </body>
</html>
