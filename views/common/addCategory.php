<?php
include_once '../../vendor/autoload.php';

use App\cmsArticle;
use App\utility\utility;

$debug =new utility();
$debug->debug($_POST);

$addCategory = new cmsArticle();
$insertCategory = $addCategory->addCategory($_POST);
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
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        ?>
    </body>
</html>
