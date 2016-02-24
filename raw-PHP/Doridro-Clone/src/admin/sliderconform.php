
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
	header('Location:login.html');
	die();
}

$title =$_POST['title'];
$album=$_POST['album'];
$artist =$_POST['artist'];
$banner =$_POST['banner'];
$numberoftrack =$_POST['numberoftrack'];
//$type =$_POST['type'];
$bitrate =$_POST['bitrate'];
$downloadlink =$_POST['downloadlink'];
$imageName =  mysql_real_escape_string($_FILES['imagefile']['name']);
$username = $_SESSION['username'];


if($title==null)
{
    echo" <script> alert('Please give a Title');  window.location.href='inserslider.php';</script>"; 
}
 else 
{
	$databaseConnector = mysql_connect('localhost','root','') or die(mysql_error());
	$db_slect = mysql_select_db("doridro_database",$databaseConnector );
    if($imageName !=null )
    {
        $imageData = mysql_real_escape_string(file_get_contents($_FILES["imagefile"]["tmp_name"]));
        $imageType = mysql_real_escape_string($_FILES["imagefile"]["type"]);
        if(substr($imageType,0,5)=="image")
        {
            $query = "INSERT INTO `tbl_slider`( `slidertitle`, `sliderimage`, `sliderimgdata`, `album`, `artist`, `banner`, `totalsong`, `bitrate`, `dllink`, `encoder_admin`) VALUES ('$title','$imageName ','$imageData','$album','$artist','$banner','$numberoftrack','$bitrate','$downloadlink','$username')";
            mysql_query($query);
            echo" <script> alert('succesfully updated the file');  window.location.href='inserslider.php';</script>";
        }
         else { echo" <script> alert('please selece Only Images as .jpg/.JPEG/.png etc');  window.location.href='inserslider.php';</script>"; }
    }
    else 
    {
     echo" <script> alert('U must have to Insert a image');  window.location.href='inserslider.php';</script>";  
    }
}
?>