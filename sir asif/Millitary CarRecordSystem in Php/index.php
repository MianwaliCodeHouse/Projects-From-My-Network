<!-- Start php Code  -->
<?php
include "db.php";
session_start();
if(isset($_POST["submit"])){
  $username=$_POST['username'];
  $password=$_POST['password'];
  $query1 = "SELECT * FROM `login` where username='$username' and  pwd='$password'";
  $rq1=mysqli_query($db,$query1);
  if (mysqli_num_rows($rq1) == 1) {
    $_SESSION["login"] = $username;
    echo "<script>alert('Hey $username , You are successfully Logined.')</script>";
    echo "<a href='home.php' id='back'>.</a>";
echo "<script>back.click()</script>";
  }else{
    echo "run";
    echo "<script>alert('Invalid UserName or Password')</script>";
   
  }

}

?>





<!-- Start Html Code  -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Car Record System</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/index.css">
  <link rel="shortcut icon" href="asset/logo.png" type="image/x-icon" id="favicon">
</head>
<body>
  <div class="container">
    <nav>
      <div class="logo">
        <img src="asset/logo.png" alt="" width="90px" id="logoimg">
      </div>
      <h1 id="unitName">
        53 EME Bn
      </h1>
      <div class="nav">
        <h1 class="icon" onclick="show()">|||</h1>
        <div id="shownav">
          <ul>
            <li onclick="changelogo()">Change logo</li>
            <li onclick="changeUnitName()">Change Unit Name</li>
          </ul>
        </div>
      </div>
    </nav>
    <main>
      <div class="traker">
        <h1>Eqpt Maint Tracker</h1>
      </div>
      <form action="" method="post">
        <h1>Login</h1>
        <h4>Username</h4>
        <input type="text" placeholder="Enter UserName" name="username">
        <h4>Password</h4>
        <input type="password" name="password" id="" placeholder="Enter Password">
        <input type="submit" value="Submit" name='submit'>
      </form>
    </main>
    <footer>
      <h3>Copyright © 2023 | All rights Reserved</h3>
    </footer>
  </div>
</body>
<script src="js/index.js"></script>
<script src="js/script.js"></script>
</html>