<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $uname = $_POST['uname'];
  $pass = $_POST['pass'];
  $role = $_POST['role'];


  $con = mysqli_connect("localhost", "root", "", "webtech");

  $check_query = "Select * FROM login wHERE username = '$uname'";
  $check_fire = mysqli_query($con,$check_query);
  $check_num = mysqli_num_rows($check_fire);
  if ($check_num > 0) {
    echo"Data Already Exists";
    
  }
  else {
  $q = "INSERT INTO login(name,username,password, role) VALUES('$name','$uname','$pass','$role')";
  mysqli_query($con, $q);
  }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Sign Up</title>
  <link rel="stylesheet" href="./style_signup.css">

</head>

<body>
  <!-- partial:index.partial.html -->
  <main>
    <section class="form-section">
      <div class="form-wrapper">
        <h1 class="title">Sign up</h1>
        <form class="form" method='POST'>
          <div class="form-row">
            <div class="form-group">
               <label>
                  <span class="sr-only">Name</span>
                  <input type="text" placeholder="Name" class="form-input" required name="name">
                </label>
            </div>
            <div class="form-group">
              <label>
                <span class="sr-only">Username</span>
                <input id="last-name" type="text" placeholder="Username" class="form-input" required name="uname">
              </label>
            </div>
          </div>
          <div class="form-group">
            <label>
              <span class="sr-only">Role</span>
              <input type="text" placeholder="Role" class="form-input" required name="role">
            </label>
          </div>
          <div class="form-group">
            <label>
              <span class="sr-only">Password</span>
              <input type="password" placeholder="Password" class="form-input" required name="pass">
            </label>
          </div>
          <div class="form-group">
            <input type="submit" value="Submit" class="form-submit" name="submit">
          </div>

        <footer class="form-footer">
          <div>
            <a href="#" class="form-link">Forgot password?</a>
          </div>
          <div>
            Already have an account?
            <a href="login.php" class="form-link">Log in</a>
            </form>
          </div>
        </footer>
      </div>
    </section>
  </main>
  <!-- partial -->

</body>

</html>