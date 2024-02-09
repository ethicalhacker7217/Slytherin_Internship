<?php 
if (isset($_POST['login'])){
  $uname = str_replace("'", "''",$_POST['uname']);
  $pass = str_replace("'", "''",$_POST['pass']);
  
 $con = mysqli_connect("localhost","root","","webtech");
 $q = "SELECT * from login where username = '$uname' AND password = '$pass'";
 $fire = mysqli_query($con,$q);
 $num = mysqli_num_rows($fire);
 if ($num>0){
  session_start();
  $_SESSION['id'] = "Verified";
  header('Location:dashboard.php');
 } 

}


?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style_login.css">
  </head>
  <body>

    <div class="wrapper">
      <div class="container">
        <div class="col-left">
          <div class="login-text">
            <h2>Admin Login</h2>
            <h4>Task Management System</h4>
            <p>Create your account.<br>It's totally free.</p>
            <a class="btn" href = "signup.php">Sign Up</a>
          </div>
        </div>
        <div class="col-right">
          <div class="login-form">
            <h2>Login</h2>
            <form method="POST">
              <p>
                <label>Username or email address<span>*</span></label>
                <input type="text" placeholder="Username or Email" name="uname"required>
              </p>
              <p>
                <label>Password<span>*</span></label>
                <input type="password" placeholder="Password" name="pass"required>
              </p>
              <p>
                <input type="submit" value="LOGIN" name="login" />
              </p>
              <p>
                <a href>Forget Password?</a>
              </p>
            </form>
          </div>
        </div>
      </div>
      <div class="credit">
        Designed by <a href="https://anshumandev.onrender.com/"target="blank">The Freelancer</a>
      </div>
    </div>
  </body>
</html>