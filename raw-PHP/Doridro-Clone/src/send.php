<?php 
$db = mysql_connect('localhost', 'root', '');
$db_table =  mysql_select_db('doridro_database',$db);
$name =$_POST['name'];
$email =$_POST['email'];
$phone =$_POST['phone'];
$message=$_POST['message'];
//echo $name.$email.$phone.$message;
if($name==null||$email==null||$phone==null||$message==null)
{
	echo" <script> alert('Please fill all fields....');  window.location.href='index.php';</script>";
}
else
{
	$Query ="INSERT INTO tbl_messsgae( sender_name, sender_email, sender_phhno, sender_message) VALUES ('$name','$email','$phone','$message')";
	mysql_query($Query);
	echo" <script> alert('Thank you for your massage...');  window.location.href='index.php';</script>";
}


?>