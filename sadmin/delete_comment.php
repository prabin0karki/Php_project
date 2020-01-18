<?php 
require_once "class/config.php";
require_once "class/comment.class.php";
$com=new Comment();
$com->id=$_GET['id'];
$com->remove();
 ?>