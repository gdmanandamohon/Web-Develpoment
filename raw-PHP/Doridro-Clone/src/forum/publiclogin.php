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
        <form class="form-signin" action="verrifyloginpublic.php" method="post" >
          <h3 class="form-signin-heading" align="center">
            Public User LogIn
          </h3>
          <input class="form-control" type="text" placeholder="email" name="publicuseremail">
          <input class="form-control" type="password" placeholder="Password" name="publicpassword">
          <button class="btn btn-lg btn-primary btn-block" type="submit">
            Sign in
          </button>
          </br>
          <a href="publicregister.php">Click Here for a new Acount</a>
        </form>

      </div>
    </div>
    </body>
 </html>