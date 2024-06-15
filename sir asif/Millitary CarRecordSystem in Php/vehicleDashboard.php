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
  <link rel="stylesheet" href="css/avehicle.css">
  <link rel="shortcut icon" href="asset/logo.png" type="image/x-icon"  id="favicon">
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
      <a onclick="history.back()">Back</a>      
    </nav>
    <br><br>
    <h1 class="v-title"><?php echo $_GET['vehicle']; ?></h1>
    <br>

    <main>
      <a href="Addvehicle.php?vehicle=<?php echo $_GET['vehicle']; ?>"><div class="div1">
      <img src="materials/add.png" alt="">Add vehicle</div></a>
      <a href="SDS.php?name=Search"><div class="div2">
      <img src="materials/search.png" alt="">Search vehicle</div></a>
      <a href="SDS.php?name=Status"><div class="div3">
      <img src="materials/status.png" alt="">vehicle Status</div></a>
      <a href="SDS.php?name=Delete"><div class="div4">
      <img src="materials/del.png" alt="">Delete vehicle</div></a>
    </main>
    <h1 class="checks">Checks</h1>

    <!-- for A_vehicle -->
    <?php if($_GET['vehicle']=="A_vehicle" ){
      ?>
      <main>
      <a href="docs/A Veh/Montly Check A Veh.pdf" target="_blank"><div class="div1">
      <img src="materials/car.png" alt="">Monthly Checks</div></a>
      <a href="docs/A Veh/Quarterly Check A Veh.pdf" target="_blank"><div class="div1">
      <img src="materials/car.png" alt="">Quaterly Checks</div></a>
      <a href="docs/A Veh/Annually Check A Veh.pdf" target="_blank"><div class="div1">
      <img src="materials/car.png" alt="">Annual Checks</div></a>
    </main>
      <?php
    }?>


<!-- for B_vehicle -->
    <?php if($_GET['vehicle']=="B_vehicle" ){
      ?>
      <main>
      <a href="docs/B Veh/Montly check  B veh.pdf" target="_blank"><div class="div2">
      <img src="materials/car.png" alt="">Monthly Checks</div></a>
      <a href="docs/B Veh/Quarterly check  B veh.pdf" target="_blank"><div class="div2">
      <img src="materials/car.png" alt="">Quarterly Checks</div></a>
      <a href="docs/B Veh/Annual check  B veh .pdf" target="_blank"><div class="div2">
      <img src="materials/car.png" alt="">Annual Checks</div></a>
    </main>
      <?php
    }?>
<!-- for C_vehicle -->
    <?php if($_GET['vehicle']=="C_vehicle" ){
      ?>
      <main>
      <a href="C_vehicle pdf link here" target="_blank"><div class="div3">
      <img src="materials/car.png" alt="">Monthly Checks</div></a>
      <a href="C_vehicle pdf link here" target="_blank"><div class="div3">
      <img src="materials/car.png" alt="">Quarterly Checks</div></a>
      <a href="C_vehicle pdf link here" target="_blank"><div class="div3">
      <img src="materials/car.png" alt="">Annual Checks</div></a>
    </main>
      <?php
    }?>
    
    <footer>
      <h3>Copyright © 2023 | All rights Reserved</h3>
    </footer>
  </div>
</body>
<script src="js/script.js"></script>
</html>


<?php
}else{
  echo "You cannot Access this page without logined";
}
?>