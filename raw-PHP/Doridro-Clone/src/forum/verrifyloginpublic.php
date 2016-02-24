<?php
$publicuseremail =$_POST['publicuseremail'];
$publicpassword =$_POST['publicpassword'];

$databaseConnector = mysql_connect('localhost','root','') or die(mysql_error());
$db_slect = mysql_select_db("doridro_database",$databaseConnector );
$query ="SELECT * FROM tbl_publicuser WHERE email = '$publicuseremail' AND password = '$publicpassword'";
$result = mysql_query($query) or die ("Unable to verify user because " . mysql_error());
$count = mysql_num_rows($result);

if ($count == 1)
{
    
    session_start();
    $_SESSION['publicuseremail']=$publicuseremail;
    $_SESSION['publicpassword']=$publicpassword;
    header('Location:../index.php');                    
}
else
{
    echo" <script> alert('Invalid Username or Password');  window.location.href='publiclogin.php';</script>";
}
?>