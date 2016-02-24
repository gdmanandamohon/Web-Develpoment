
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
        <li><a href='cancealList.php'>Canceal list</a></li>
        <li><a href='destroysession.php'>Log OUT</a></li>
    </ul>

</div>
<div class="contact_area" >
<table border="1px solid #000" width="100%">
    <tr>
        <td >Customer name</td>
        <td>Package</td>
        <td>Time</td>
        <td>Money Amount</td>
        <td>Email</td>
        <td>place</td>
    </tr>
    <?php
    include '../dbConnect.php';
    $query ="SELECT * FROM `tbl_conformed_req`";
    $result = mysql_query($query);

    echo'<p><h4>Bandarban</h4></p>';
    while($row =mysql_fetch_array($result))
    {
        echo'<tr>';
        echo"<td >".$row['name']."</td>";
        echo"<td >".$row['package']."</td>";
        echo"<td >".$row['time']."</td>";

        echo"<td >".$row['amount']."</td>";
        echo"<td >".$row['email']."</td>";
        echo"<td >".$row['place']."</td>";
        echo'</tr>';
    }


    ?>

</table>


</div>
<!------------------content end------------->
<div class="footer">
    <div class="bottom1"><p>
            All right reserved,copyright@2013monestra.com<br/>
            website design and development by<br/>
            <strong>menwarezone.net</strong>
        </p>
    </div>
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