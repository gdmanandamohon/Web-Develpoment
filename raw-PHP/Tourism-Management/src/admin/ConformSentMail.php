<?php
include'../dbConnect.php';
$id = $_REQUEST['id'];
$tbl = $_REQUEST['tbl'];
$query_accept = "SELECT * FROM $tbl WHERE `id`=$id";
$result= mysql_query($query_accept);
$row =mysql_fetch_array($result);

$name =$row['name'];
$package =$row['package'];
$time =$row['month']."-".$row['date'].":".$row['journy_time'];
$amount =$row['amount'];
$email=$row['email'];
 $query_conf_list ="INSERT INTO `tbl_conformed_req` (`name`, `package`, `time`, `amount`, `email`, `place`) VALUES ('$name', '$package', '$time', '$amount', '$email', '$tbl');";
        mysql_query($query_conf_list);
        $query = "DELETE FROM $tbl WHERE `id`=$id";
        mysql_query($query);
echo"<script> alert('Succesfully  Moved To Conformed List.'); window.location.href='index.php';</script>";