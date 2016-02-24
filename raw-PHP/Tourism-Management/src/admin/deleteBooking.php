
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
    header('Location:login.php');
    die();
}

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Admin | Home</title>
    <link rel="stylesheet" href="style.css" />

</head>

<body>
<div class="main">
    <div class="header">
        <div class="logo">
            <a href="#"><img src="pictures/logo.png" alt="image" /></a></div>
        <div class="contract">
            <div class="read">Know more,contract us</div>
            <div class="read"><a href="#">info@menwarezone.com</a></div>
        </div>
    </div>
    <div class="nav">
        <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href='alreadyConformed.php'>Conformed list</a></li>
            <li><a href='destroysession.php'>Log OUT</a></li>
        </ul>

    </div>
    <div class="contact_area" >



    </div>
    <!------------------content end------------->
    <div class="footer">
        <div class="bottom1"><p>
                All right reserved,copyright@2013monestra.com<br/>
                website design and development by<br/>
                <strong>menwarezone.net</strong>
            </p>
        </div>

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
        echo "<div style='margin-left: 0'>";
        echo"<form action ='DeleteAnd_MailSent.php'>";
        echo"<label>Send a conformation to $name </label> </br>";
        echo"<input readonly type='email' value='$email'>";
        echo"<input type='text' style='width: 350px; height: 350px;'>";
        echo"<input type='hidden' value=$id name='id'>";
        echo"<input type='hidden' value=$tbl name='tbl'>";
        echo"<input type='submit'>";
        echo'</form>';
        echo "</div>";

        ?>

        <div class="bottom2">
            <ul>
                <li><a href="#">Home</a>|</li>
                <li><a href="#">About us</a>|</li>
                <li><a href="#">Product</a>|</li>
                <li><a href="#">Service</a>|</li>
                <li><a href="#">Contract</a></li>
            </ul>


        </div>
    </div>



    <div class="clearfix">
    </div>
</div>
</body>
</html>