<?php session_start(); ?>
<html>
    <head>
        <script type="text/javascript" src="js/jquery-1.12.3.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script src="js.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <title>Registration</title>
        <!-- start: Favicon -->
        <link rel="shortcut icon" href="img/gallery/logo3.png">
        <!-- end: Favicon -->
    </head>
    <body>
        <?php include_once './views/menu/menu.php'; ?>
        <div class="modal-dialog">
            <div class="loginmodal-container">
                <h1>Registration</h1><br>
                <form action="registration.php" method="post"  onsubmit="return validateForm(this)">
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="text" name="username" placeholder="UserName" required>
                    <input type="text" name="contact_number" placeholder="Contact No">
                    <input type="password" name="password" placeholder="Password"  required>
                    <input type="password" name="confirm_password" placeholder="Confirm Password"  required>
                    <input type="submit"  class="login loginmodal-submit" name="submit" value="Sign Up">
                </form>

                <div class="login-help">
                    Already registered? <a href="login.php">LogIn</a>
                </div>
            </div>
        </div>
        <?php
        if (isset($_SESSION['msg']) && !empty($_SESSION['msg'])) {
            ?>
            <div style="text-align: center" >
                <div class=" container col-md-4"></div>
                <div  class=" container col-md-4 list-group-item list-group-item-success"><?php echo $_SESSION['msg']; ?>
                </div>
            </div>
            <?php
            session_unset('msg');
        }
        ?>

    </body>
</html>
