<?php

$place =$_POST['select_place'];
$name =$_POST['inp_name'];
$pkg =$_POST['package_type'];
$month =$_POST['select_month'];
$date =$_POST['select_date'];
$time =$_POST['select_time'];
$descript =$_POST['text_discript'];

$money_amount =$_POST['money_amount'];
$customer_email =$_POST['cus_email'];
$coform_date =date('Y-m-d');
//echo $coform_date;
include "dbConnect.php";

if($place=="bandarban")
{
    $query ="INSERT INTO `tbl_req_bandrban`(`name`, `package`, `month`, `date`, `journy_time`, `discript`, `amount`, `email`, `conformation_date`) VALUES ('$name','$pkg','$month','$date','$time','$descript', '$money_amount','$customer_email','$coform_date')";
    $fal =mysql_query($query);
    echo"<script> alert('Request accepted'); window.location.href='booking.html';</script>";
}
else if($place=="sixtygambuj")
{
    $query ="INSERT INTO `tbl_req_shatgambuj`(`name`, `package`, `month`, `date`, `journy_time`, `discript`, `amount`, `email`, `conformation_date`) VALUES ('$name','$pkg','$month','$date','$time','$descript', '$money_amount','$customer_email','$coform_date')";
    $fal =mysql_query($query);
    echo"<script> alert('Request accepted'); window.location.href='booking.html';</script>";

}
else if($place=="coxbazar")
{
    $query ="INSERT INTO `tbl_req_coxbazar`(`name`, `package`, `month`, `date`, `journy_time`, `discript`, `amount`, `email`, `conformation_date`) VALUES ('$name','$pkg','$month','$date','$time','$descript', '$money_amount','$customer_email','$coform_date')";
    $fal =mysql_query($query);
    echo"<script> alert('Request accepted'); window.location.href='booking.html';</script>";
}
else if($place=="rngamati")
{
    $query ="INSERT INTO `tbl_req_rangamati`(`name`, `package`, `month`, `date`, `journy_time`, `discript`, `amount`, `email`, `conformation_date`) VALUES ('$name','$pkg','$month','$date','$time','$descript', '$money_amount','$customer_email','$coform_date')";
    $fal =mysql_query($query);
    echo"<script> alert('Request accepted'); window.location.href='booking.html';</script>";
}
else if($place=="syhlet")
{
    $query ="INSERT INTO `tbl_req_shylet`(`name`, `package`, `month`, `date`, `journy_time`, `discript`, `amount`, `email`, `conformation_date`) VALUES ('$name','$pkg','$month','$date','$time','$descript', '$money_amount','$customer_email','$coform_date')";
    $fal =mysql_query($query);
    echo"<script> alert('Request accepted'); window.location.href='booking.html';</script>";
}
else if($place=="sndban")
{
    //sundarban
    $query ="INSERT INTO `tbl_req_sundarban`(`name`, `package`, `month`, `date`, `journy_time`, `discript`, `amount`, `email`, `conformation_date`) VALUES ('$name','$pkg','$month','$date','$time','$descript', '$money_amount','$customer_email','$coform_date')";
    $fal =mysql_query($query);
    echo"<script> alert('Request accepted'); window.location.href='booking.html';</script>";
}
else{
    echo"<script> alert('Something Went Wrong. Please try again.'); window.location.href('booking.html')</script>";
}