<?php 
session_start();
$_SESSION=array();
$_SESSION['password']=NULL;
$_SESSION['username']=NULL;
session_destroy();
header('Location:login.html');
