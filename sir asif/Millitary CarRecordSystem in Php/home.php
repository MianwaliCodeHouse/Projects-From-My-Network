

<?php
session_start();
if(isset($_SESSION['login'])){
?>










<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Car Record System</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/home.css">
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
      
    </nav>
    <div class="body">
    <h1>Vehicles Categories</h1>
    <main>
      <a href="vehicleDashboard.php?vehicle=A_vehicle"><div class="div1">
      <img src="materials/car.png" alt="">
      A vehicle</div></a>
      <a href="vehicleDashboard.php?vehicle=B_vehicle"><div class="div2">
      <img src="materials/car.png" alt="">
      B vehicle</div></a>
      <a href="vehicleDashboard.php?vehicle=C_vehicle"><div class="div3">
      <img src="materials/car.png" alt="">
      C vehicle</div></a>
    </main>
    <h1 class="checks">Checks</h1>
    <main>
      <a href="vehicleChecks.php?check=Monthly"><div class="div1">
      <img src="materials/checks.png" alt="">Monthly Checks</div></a>
      <a href="vehicleChecks.php?check=Quaterly"><div class="div2">
      <img src="materials/checks.png" alt="">Quaterly Checks</div></a>
      <a href="vehicleChecks.php?check=Annual"><div class="div3">
      <img src="materials/checks.png" alt="">Annually Checks</div></a>
    </main>

    <!-- display record tab  -->
    <h1>Display Records</h1>
    <main>
      <a href=""><div class="div4">
      <img src="materials/display.png" alt="">
      Display All Records</div></a>
    </main>
     <!-- display record tab End -->
     
    <h1>Notifications</h1>
    <main>
      <a href="notifications.php"><div class="div4">
      <img src="materials/bill.png" alt="">
      Notifications</div></a>
    </main>
    <h1>Important Notes</h1>
    <main>
      <a href=""><div class="div4">
      <img src="materials/imp.png" alt="">
      Important Note</div></a>
    </main>
    </div>
    <footer>
      <h3>Copyright © 2023 | All rights Reserved</h3>
    </footer>
  </div>
</body>
<script src="js/script.js"></script>
</html>




<?php
}else{
  echo "<h1> Page Not Found</h1>";
}
?>