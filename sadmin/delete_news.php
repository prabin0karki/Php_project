<?php 
require_once "class/config.php";
require_once "class/news.class.php";
$obj=new News();
$obj->id=$_GET['id'];
$obj->remove();
 ?>