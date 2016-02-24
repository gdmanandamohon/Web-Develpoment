<?php
/**
 * Created by PhpStorm.
 * User:
 * Date: 02-Apr-15
 * Time: 4:27 PM
 */
$customer_name =$_POST['customer_name'];
$customer_email =$_POST['customer_email'];
$customer_package =$_POST['customer_package'];
$customer_select_place =$_POST['select_place'];
$customer_textarea_dicript =$_POST['textarea_dicript'];
include('dbConnect.php');

$query ="INSERT INTO `tbl_canceal_request_list`(`c_name`, `c_email`, `c_package`, `c_place`, `c_discript`) VALUES ('$customer_name','$customer_email','$customer_package','$customer_select_place','$customer_textarea_dicript')";
mysql_query($query);
echo"<script> alert('Your Canceal Request accepted. We will inform You Later via Email.'); window.location.href='contact.html';</script>";