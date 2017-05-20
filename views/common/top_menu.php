<?php
include_once '../../vendor/autoload.php';

use App\cmsArticle;
use App\utility\utility;

$topMenu = new cmsArticle();
$MenuUserData = $topMenu->setEmail($_SESSION['email'])->logIn();
?>

<div class="navbar">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="http://localhost/brighter2morrow/views/common/index.php"><span>Go to Site</span></a>

                    <!-- start: Header Menu -->
                    <div class="nav-no-collapse header-nav">
                        <ul class="nav pull-right">
                            <li class="dropdown hidden-phone">

                                <!-- <li class="dropdown"> -->
                                <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="halflings-icon white user"></i> <?php echo $MenuUserData['username'];?>
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-menu-title">
                                        <span>Account Settings</span>
                                    </li>
                                    <li><a href="#"><i class="halflings-icon user"></i> Change Settings</a></li>
                                    <li><a href="http://localhost/brighter2morrow/views/common/profile.php"><i class="halflings-icon user"></i> Profile</a></li>
                                    <li><a href="http://localhost/brighter2morrow/logOut.php"><i class="halflings-icon off"></i> Logout</a></li>
                                </ul>
                            </li>
                            <!-- end: User Dropdown -->
                        </ul>
                    </div>
                    <!-- end: Header Menu -->

                </div>
            </div>
        </div>