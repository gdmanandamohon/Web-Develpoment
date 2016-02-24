<?php
$databaseConnector = mysql_connect('localhost','root','') or die(mysql_error());
$userpassword = $_POST['password'];
$username = $_POST['username'];
$db_slect = mysql_select_db("doridro_database",$databaseConnector );
$query = "SELECT * FROM tbl_postuseridpass WHERE userid = '$username' AND password = '$userpassword'";
$result = mysql_query($query) or die ("Unable to verify user because " . mysql_error());
$count = mysql_num_rows($result);
if ($count == 1)
{
    
    session_start();
    
    $_SESSION['password']=$userpassword;
    $_SESSION['username']=$username;
    header('Location:index.php');                    
}
else
{
    echo" <script> alert('Invalid Username or Password');  window.location.href='login.html';</script>";
}
