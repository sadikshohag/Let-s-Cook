<?php
include_once '../../vendor/autoload.php';
session_start();

use App\cmsArticle;
use App\Utility\Utility;

$obj= new cmsArticle(); 
//$debug = new utility();
//$debug->debug($_GET);

$obj->setEmail($_GET['email']);
$obj->isActive();



?>
