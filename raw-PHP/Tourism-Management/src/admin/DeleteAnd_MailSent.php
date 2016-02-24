
<?php
function is_logged_in()
{
    if(isset($_SESSION['username'])&&isset($_SESSION['password']))
        return true;
    else
        return false;
}
session_start();
if(!is_logged_in())
{
    header('Location:login.php');
    die();
}


/**
 * CreSuccessfullytorm.
 * User: Lazy TXD
 * Date: 27-Mar-15
 * Time: 11:38 AM
 */
include'../dbConnect.php';
$id = $_REQUEST['id'];
$tbl = $_REQUEST['tbl'];
$query = "DELETE FROM $tbl WHERE `id`=$id";
mysql_query($query);
echo"<script> alert('Succesfully Deleted.'); window.location.href='index.php';</script>";