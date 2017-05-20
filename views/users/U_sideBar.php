<?php
include_once '../../vendor/autoload.php';

use App\cmsArticle;
use App\utility\utility;

$sideBar = new cmsArticle();
//$userData = $sideBar->getPendingUser();
//$debug = new utility();
//$debug->debug($userData);
//die();
//foreach ($userData as $value) {
//    if ($value['is_active'] == 1) {
//        $counter++;
//    }
//}
?>
<div id="sidebar-left" class="span2">
    <div class="nav-collapse sidebar-nav">
        <ul class="nav nav-tabs nav-stacked main-menu">
            <li><a href="http://localhost/brighter2morrow/views/users/index.php"><i class="icon-bar-chart"></i><span class="hidden-tablet">Dashboard</span></a></li>	
            <!--<li><a href="userlist.php"><i class="icon-envelope"></i><span class="hidden-tablet"> User List</span></a></li>-->
            <!--<li><a href="#"><i class="icon-tasks"></i><span class="hidden-tablet">Pending Registration </span><span class="label label-important"> <?php echo $userData['ID']; ?> </span></a></li>-->
            <li>
                <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet">Article</span></a>
                <ul>
                    <!--<li><a class="submenu" href=""><i class="icon-file-alt"></i><span class="hidden-tablet">All Article</span></a></li>-->
                    <li><a class="submenu" href="http://localhost/brighter2morrow/views/common/createArticle.php"><i class="icon-file-alt"></i><span class="hidden-tablet">Add Article</span></a></li>

                </ul>	
            </li>
            <li><a href="http://localhost/brighter2morrow/views/common/category.php"><i class="icon-tasks"></i><span class="hidden-tablet">Add Category </span></a></li>
<!--<li><a href="#"><i class="icon-edit"></i><span class="hidden-tablet"> Messages</span></a></li>-->
            <li><a href="http://localhost/brighter2morrow/logOut.php"><i class="icon-lock"></i><span class="hidden-tablet"> Log Out</span></a></li>
        </ul>
    </div>
</div>