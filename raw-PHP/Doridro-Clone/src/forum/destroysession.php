<?php 
session_start();
$_SESSION=array();
$_SESSION['publicuseremail']=NULL;
$_SESSION['publicpassword']=NULL;
session_destroy();
header('Location:../index.php');
