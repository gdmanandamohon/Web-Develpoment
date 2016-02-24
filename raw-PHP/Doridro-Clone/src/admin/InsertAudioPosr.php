<?php
function is_logged_in()
{
if(isset($_SESSION['username'])&&isset($_SESSION['password']))
	return true;
else return false;
}
session_start();
if(!is_logged_in())
{
	header('Location:login.html');
	die();
}
$databaseConnector = mysql_connect('localhost','root','') or die(mysql_error());
$db_slect = mysql_select_db("doridro_database",$databaseConnector );

$title =$_POST['au_title'];
$post_type=$_POST['au_post_type'];
$short_discription =$_POST['au_short_dicript'];
$dl_link=$_POST['au_dl_link'];
$adminID = $_SESSION['username'];
$date =date("d.m.Y");
$imageName =  mysql_real_escape_string($_FILES['au_image']['name']);

if($post_type==null)
{
    echo" <script> alert('please selece a type');  window.location.href='insertaudio.php';</script>"; 
}
 else 
{
    if($title!=NULL && $post_type!=NULL && $short_discription!=NULL && $dl_link!=NULL && $adminID !=NULL && $date!=NULL && $imageName!=NULL )
    {
        $imageData = mysql_real_escape_string(file_get_contents($_FILES["au_image"]["tmp_name"]));
        $imageType = mysql_real_escape_string($_FILES["au_image"]["type"]);
        if(substr($imageType,0,5)=="image")
        {
            $query = "INSERT INTO tbl_audio_allpost ( post_title, post_type, post_screenshot, post_screen_title, post_date, post_information, post_dlLink, post_admin) VALUES ('$title','$post_type','$imageData','$imageName','$date','$short_discription','$dl_link','$adminID')";
            mysql_query($query);
            echo" <script> alert('succesfully updated the file');  window.location.href='insertaudio.php';</script>";
        }
         else { echo" <script> alert('please selece Only Images as .jpg/.JPEG/.png etc');  window.location.href='insertaudio.php';</script>"; }
    }
    else 
    {
     echo" <script> alert('Sorry you have to fill all Items');  window.location.href='insertaudio.php';</script>";  
    }
}