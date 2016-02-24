<?php 
$userpassword1 = $_POST['password1'];
$userpassword2 = $_POST['password2'];
$username = $_POST['publicuser'];
$usermail = $_POST['publicuser_mail'];



$databaseConnector = mysql_connect('localhost','root','') or die(mysql_error());
$db_slect = mysql_select_db("doridro_database",$databaseConnector );

$query = "SELECT * FROM  `tbl_publicuser` WHERE  `email` =  '$usermail '";
$result =mysql_query($query);
$row=  mysql_fetch_array($result);
if ($row==null||$row==0) 
{
		if ($userpassword1 ==$userpassword2 && $userpassword1 !==null && $userpassword2  !==null ) 
		{
		 	$query_insert =" INSERT INTO tbl_publicuser( name, email, password ) VALUES ('$username','$usermail','$userpassword1')";
	 		mysql_query($query_insert );
	 		echo" <script> alert('Congratz !! U are registered.');  window.location.href='publiclogin.php';</script>";
		}
		else 
		{
			 echo" <script> alert('Password mismass!!! Reype Password.');  window.location.href='publicregister.php';</script>";
		}
}
else
{
	 echo" <script> alert(' this email has already registerde. Try another.');  window.location.href='publicregister.php';</script>";
}
 ?>
