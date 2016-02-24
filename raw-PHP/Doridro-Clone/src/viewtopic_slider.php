<?php 
session_start();
function is_logged_in()
{
    
    if(isset($_SESSION['publicuseremail'])&&isset($_SESSION['publicpassword']))
            return true;
    else 
        return false;
}?>
<?php 
include 'dbconnection.php';
 $id_row=$_GET['sliderid'];
 //$id_tbl=$_GET['table'];
 $tableName =$_GET['table'];

     $query="SELECT * FROM `tbl_slider` WHERE `sliderid`=' $id_row'";

 $result=mysql_query($query);
 $row=  mysql_fetch_array($result);
?>
<!Doctype html>
<html>
    <head>
        <title>
           <?php echo $row['slidertitle'];?> 
        </title>
        <link type="text/css" rel="stylesheet" href="css/viewtopic.css"/>
    </head>
    <body>
        <div class="main-body">
            <?php
            	if(is_logged_in())
            	{
            		echo"<div class='header'>
                	<div class='namefield'><h5>".$_SESSION['publicuseremail']."</h5></div>
                	<div class= 'logout'>
                    	<form action='forum/destroysession.php'>
                        	<input type='submit' value='logut'/>
                   		 </form>
                	</div>
           		 	</div>";
            	}
            ?>
            <div class="view-area">
                <h2>  <?php echo $row['slidertitle']?></h2>
                <h4><?php echo $row['album']?></h4>
                <h4><?php echo $row['bitrate']?></h4>
                <h4><?php echo $row['banner']?></h4>
                <?php 
                 echo "<img class ='view-area-image' src='data:image/jpeg;base64,".base64_encode( $row['sliderimgdata'] )."'/>";
                //echo " <h4>Post Date : ".$row['post_date']."</h4>";
                if(is_logged_in())
                { echo " <h4>Download Link : <a href =".$row['dllink'].">".$row['dllink']."</a></h4>"; }
                else{ echo "<h4>Please <a href ='forum/publiclogin.php'>Login</a> To see The Download Link.</h4>";}
                ?>
            </div>
            <div class="foooter">
                <footer>
                    <h4>&COPY copyright <a href="doridro.com">Doridro.com </a></h4>
                </footer>
            </div>
        </div>
    </body>
</html>
