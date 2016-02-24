
<?php 
function is_logged_in()
{
    
    if(isset($_SESSION['publicuseremail'])&&isset($_SESSION['publicpassword']))
            return true;
    else 
        return false;
}
session_start(); 
if(is_logged_in())
	 header("Location : ../index.php");
?> 
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>
      Public User Login
    </title>
    <link rel="stylesheet" href="css/publicuser.css">
  </head>
  <body>
    <div class="container">
      <div id="form_container">
        <form class="form-signin" action="insertpublic.php" method="POST" role="form">
          <h3 class="form-signin-heading" align="center">
            Public User Rgister
          </h3>
          <input class="form-control" type="text" placeholder="Name" name="publicuser">
          <input class="form-control" type="text" placeholder="email" name="publicuser_mail">
          <input class="form-control" type="password" placeholder="Password" name="password1">
          <input class="form-control" type="password" placeholder="Retype Password" name="password2">
          <button class="btn btn-lg btn-primary btn-block" type="submit">
            OK
          </button>
          </br>
          <a href="publiclogin.php">Go Back To Log IN</a>
        </form>

      </div>
    </div>
    </body>
 </html>
 