<?php
/**
 * Created by PhpStorm.
 * User: Ananda  Mohon Ghosh
 * Date: 02-Apr-15
 * Time: 4:59 PM
 */
$id = $_REQUEST['id'];
include '../dbConnect.php';
$query ="DELETE FROM `tbl_canceal_request_list` WHERE `c_id`=$id";
$result=mysql_query($query);
if($result)
    echo"<script> alert('Succesfully  Removed This Contact.'); window.location.href='cancealList.php';</script>";