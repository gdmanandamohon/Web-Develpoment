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
$databaseConnector = mysql_connect('localhost','root','') or die(mysql_error());
$db_slect = mysql_select_db("doridro_database",$databaseConnector );
$username = $_SESSION['username'];
$query = "SELECT user_name FROM tbl_postuser_information WHERE user_id = '$username'";
$result = mysql_query($query) or die ("Unable to verify user because " . mysql_error());
$Query_message="SELECT count(*) FROM `tbl_messsgae` WHERE `isvisited`=0 ";
$message_result =mysql_query($Query_message);
$message_result=mysql_fetch_array($message_result);
?>
<!DOCTYPE html>
<html>
  <head>
    <title>
        Welcome |  <?php echo $_SESSION['username'];?>
    </title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <script src="js/jquery_latest.min.js" type="text/javascript"></script>
    <script src="js/menu_script.js"></script>
  </head>
  <body>
    <div class="main_body">
      <div class="top_nav">
        <div class="top_nav_imgposition  floatleft">
          <img src="Images/doridroLogo.ico" alt="" />
          <h3 style="display: inline; margin-top:-20px;">DORIDRRO</h3>
        </div>
        <div class="top_nav_menu fix floatleft">
          <img src="Images/menu_icon_min1.png" alt=""/>
          
          <input type="button" value="8"/>
        </div>
        <div class="top_nav_newsfeed fix floatleft">
          <img src="Images/Bell2.png" alt=""/>
          
          <input type="button" value="4"/>
        </div>
        <div class="top_nav_messages fix floatleft">
          
          <img src="Images/Message-outline-icon.png" alt=""/>
          
          <a href="message.php"><input type="button" value=<?php echo $message_result['count(*)'];?>></a>
        </div>
        <div class="top_nav_user floatleft">
          <form target="#" action="" method="get">
            <a href="#">
              <img class="floatleft fix" src="Images/chris_palmer_profile.jpg" alt="" style=" width: 40px; height: 40px; padding: 5px 10px 5px 10px; border-radius:50% "/>
            </a>
            <h4 style="font-size: 8px;">
              <?php echo $_SESSION['username'];?>
            </h4>
          </form>
          <form action="destroysession.php" method="post">
              <input type="submit" value="Log out" class="logOutButton" onClick="return User('0')"/>
          </form>
        </div>
      </div>
      <div class="center_nav">
          <!--  menu sts -->
        <div class="center_nav_leftmenu floatleft" id='cssmenu'>
          <h2>Welcome </h2>
          <ul>
              <li class='active' id="home_li"><a href="index.php"><span>Home</span></a></li>
            <li class='has-sub'><a href='#'><span>Insert a Post </span></a>
              <ul>
                  <li><a href='insertaudio.php' id="insert_audio_li"><span>Audio</span></a></li>
                  <li><a href='insertvideo.php' id="insert_video_li"><span>Video</span></a></li>
                <li class='last'><a href='inserslider.php'><span>Slider</span></a></li>
              </ul>
            </li>
            <li class='has-sub'><a href='#'><span> Remove a post</span> </a>
              <ul>
                  <li><a href='removeaudio.php' id="delete_audio_li"><span>Audio</span></a></li>
                  <li class='last'> <a href='removevideo.php' id="delete_video_li"><span>Vidoe</span></a></li>
              </ul>
            </li>
            <li class='last' id="contact_li" > <a href='message.php' ><span>Contact</span></a>
            </li>
          </ul>
        </div>
        <div class="center_nav_postfield">