<?php
$db = mysql_connect('localhost', 'root', '');
$db_table =  mysql_select_db('doridro_database',$db);
$message_id=$_GET['message_id'];
echo $message_id;
$Query="UPDATE `tbl_messsgae` SET isvisited=1 WHERE message_id='$message_id'";
$result =mysql_query($Query);
header("Location: message.php")
?>