<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?=$_GET['name']?></title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/SDS.css">
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
      <h1><a href="logout.php" style="color:white">Logout</a></h1>
    </nav>
    <nav class="navtwo">
      <a href="home.php">Home</a>
      <a href="notifications.php">Notifications</a>
      
    </nav>

<?php
if($_GET['name']==='Search'){


?>
<!-- html code  -->
<main>
      <div class="traker">
        <h1>Search Vehicle through 'BA No'</h1>
      </div>
      <form action="search.php" method="post">
        <h1>BA NO</h1>
        <input type="text" placeholder="Enter BA No of Vehicle" name="BAno">
        <input type="submit" value="Submit" name='submit'>
      </form>
    </main>

<?php
}elseif ($_GET['name']==='Delete') {
  

?>

<!-- html code  -->
<main>
      <div class="traker">
        <h1>Delete Vehicle Record through 'BA No'</h1>
      </div>
      <form action="delete.php" method="post">
        <h1>BA NO</h1>
        <input type="text" placeholder="Enter BA No of Vehicle" name="BAno">
        <input type="submit" value="Submit" name='submit'>
      </form>
</main>

<?php
}elseif ($_GET['name']==='Status') {
 

?>

<!-- html code  -->
<main>
      <div class="traker">
        <h1>See Vehicle Status/Record through 'BA No'</h1>
      </div>
      <form action="vehicleStatus.php" method="post">
        <h1>BA NO</h1>
        <input type="text" placeholder="Enter BA No of Vehicle" name="BAno">
        <input type="submit" value="Submit" name='submit'>
      </form>
    </main>

<?php
}else{
  echo "<h1>Not Found";
}
?>

<footer>
      <h3>Copyright © 2023 | All rights Reserved</h3>
    </footer>
</div>
</body>
<script src="js/script.js"></script>
</html>