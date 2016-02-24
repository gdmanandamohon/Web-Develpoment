<?php

$name =$_POST['email'];
$password =md5($_POST['password']);

include "../dbConnect.php";
$query = "SELECT * FROM `users` WHERE `email`='$name' AND `password`='$password'";
$result = mysql_query($query) or die ("Unable to verify user because " . mysql_error());
$count = mysql_num_rows($result);
if ($count == 1)
{

    session_start();

    $_SESSION['password']=$password;
    $_SESSION['username']=$name;
    header('Location: ../admin/index.php');
}
else
{
    echo" <script> alert('Invalid Username or Password');  window.location.href='login.php';</script>";

}


