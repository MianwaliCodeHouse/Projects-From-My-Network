<?php
include "db.php";
session_start();
if (isset($_POST['submit'])) {
  $BAno=$_POST['BAno'];
  $qr="select * from vehiclesrecords where BA_NO='$BAno'";
  $rqr = mysqli_query($db, $qr);
  if(mysqli_num_rows($rqr)>=1){
    $data = mysqli_fetch_assoc($rqr);
  }else{
    echo "<script>alert(`'Sorry, Record Not Found from database that's BA NO is $BAno'`)</script>";
    echo "<a href='SDS.php?name=Search' id='back'>.</a>";
    echo "<script>back.click()</script>";
  }
}else{
  header('location: SDS.php?name=Search');
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Car Record System</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/Addvehicle.css">
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
      <a onclick="history.back()">Back</a>      
    </nav>
    
    <main>
    <h1>Search " <?php echo $data['BA_No']; ?> "</h1>
<form action="" method="post">
  <div class="group">
    <b>Type of Vehicle</b>
    <input type="text" name="vehicle_type" value="<?php echo $data['vehicle_type'] ?>" disabled>
  </div>
  <div class="group">
    <b>BA No</b>
    <input type="text" name="ba_no" value="<?php echo $data['BA_No'] ?>" disabled>
  </div>
  <div class="group">
    <b>Make & Type</b>
    <input type="text" name="make_type" value="<?php echo $data['make_and_type'] ?>" disabled>
  </div>
  <div class="group">
    <b>Engine No</b>
    <input type="text" name="engine_no" value="<?php echo $data['engine_no'] ?>" disabled>
  </div>
  <div class="group">
    <b>Chassis No</b>
    <input type="text" name="chassis_no" value="<?php echo $data['chassis_no'] ?>" disabled>
  </div>
  <div class="group">
    <b>Year of Manufacture</b>
    <input type="number" name="year_of_manufacture" value="<?php echo $data['year_of_manufacture'] ?>" disabled>
  </div>
  <div class="group">
    <b>No of cysnider</b>
    <input type="number" name="No_of_cylinder" value="<?php echo $data['No_of_cylinder'] ?>" disabled>
  </div>
  <div class="group">
    <b>Horse power</b>
    <input type="text" name="horse_power" value="<?php echo $data['Horse power'] ?>" disabled>
  </div>
  <div class="group">
    <b>Bty Make & type</b>
    <input type="text" name="bty_make_type" value="<?php echo $data['bty_make_and_type'] ?>" disabled>
  </div>
  <div class="group">
    <b>Status</b>
    <input type="text" name="status" value="<?php echo $data['status'] ?>" disabled>
  </div>
  <div class="group">
    <b>Running</b>
    <input type="text" name="running" value="<?php echo $data['running'] ?>" disabled>
  </div>
  <div class="group">
    <b>Type of Fuel</b>
    <input type="text" name="type_of_fuel" value="<?php echo $data['type_of_fuel'] ?>" disabled>
  </div>
  <div class="group">
    <b>Wheels</b>
    <input type="number" name="wheels" value="<?php echo $data['wheels'] ?>" disabled>
  </div>
  <div class="group">
    <b>Fuel Tank Capacity</b>
    <input type="text" name="fuel_tank_capacity" value="<?php echo $data['fuel_tank_capacity'] ?>" disabled>
  </div>
  <div class="group">
    <b>Engine oil Capacity</b>
    <input type="text" name="engine_oil_capacity" value="<?php echo $data['engine_oil_capacity'] ?>" disabled>
  </div>
  <div class="group">
    <b>Radiator Capacity</b>
    <input type="text" name="radiator_capacity" value="<?php echo $data['radiator_capacity'] ?>" disabled>
  </div>
 
  
  <div class="group">
    <b>Engine Oil change date</b>
    <input type="date" name="engine_oil_change" value="<?php echo $data['engine_oil_change'] ?>" disabled>
  </div>
  <div class="group">
    <b>Engine Oil due date</b>
    <input type="date" name="engine_oil_due" value="<?php echo $data['engine_oil_due'] ?>" disabled>
  </div>
  <div class="group">
    <b>Fuel filter change date</b> 
    <input type="date" name="fuel_filter_change" value="<?php echo $data['fuel_filter_change'] ?>" disabled>
  </div>
  <div class="group">
    <b>Fuel filter due date</b> 
    <input type="date" name="fuel_filter_due" value="<?php echo $data['fuel_filter_due'] ?>" disabled>
  </div>
  <div class="group">
    <b>Air filter change date</b>
    <input type="date" name="air_filter_change" value="<?php echo $data['air_filter_change'] ?>" disabled>
  </div>
  <div class="group">
    <b>Air filter due date</b>
    <input type="date" name="air_filter_due" value="<?php echo $data['air_filter_due'] ?>" disabled>
  </div>
  <div class="group">
    <b>Tx Oil change date</b>
    <input type="date" name="tx_oil_change" value="<?php echo $data['Tx_oil_change'] ?>" disabled>
  </div>
  <div class="group">
    <b>Tx Oil due date</b>
    <input type="date" name="tx_oil_due" value="<?php echo $data['Tx_oil_due'] ?>" disabled>
  </div>
  <div class="group">
    <b>diff Oil change date</b>
    <input type="date" name="diff_oil_change" value="<?php echo $data['diff_oil_change'] ?>" disabled>
  </div>
  <div class="group">
    <b>diff Oil due date</b>
    <input type="date" name="diff_oil_due" value="<?php echo $data['diff_oil_due'] ?>" disabled>
  </div>
  <div class="group">
    <b>Hydrolic Oil change date</b>
    <input type="date" name="hydrolic_oil_change" value="<?php echo $data['hydrolic_oil_change'] ?>" disabled>
  </div>
  <div class="group">
    <b>Hydrolic Oil due date</b>
    <input type="date" name="hydrolic_oil_due" value="<?php echo $data['hydrolic_oil_due'] ?>" disabled>
  </div>
  <div class="group">
    <b>Battery change date</b>
    <input type="date" name="bty_change" value="<?php echo $data['bty_change_date'] ?>" disabled>
  </div>
  <div class="group">
    <b>Battery due date</b>
    <input type="date" name="bty_due" value="<?php echo $data['bty_due_date'] ?>" disabled>
  </div>
  <div class="group">
    <b>Monthly check date</b>
    <input type="date" name="monthly_check_date" value="<?php echo $data['monthly_check_date'] ?>" disabled>
  </div>
  <div class="group">
    <b>Monthly due date</b>
    <input type="date" name="monthly_due_date" value="<?php echo $data['monthly_due_date'] ?>" disabled>
  </div>
  <div class="group">
    <b>Quaterly check date</b>
    <input type="date" name="quaterly_check_date" value="<?php echo $data['quaterly_check_date'] ?>" disabled>
  </div>
  <div class="group">
    <b>Quaterly due date</b>
    <input type="date" name="quaterly_due_date" value="<?php echo $data['quaterly_due_date'] ?>" disabled>
  </div>
  <div class="group">
    <b>Annual check date</b>
    <input type="date" name="annual_check_date" value="<?php echo $data['annual_check_date'] ?>" disabled>
  </div>
  <div class="group">
    <b>Annual due date</b>
    <input type="date" name="annual_due_date" value="<?php echo $data['annual_due_date'] ?>" disabled>
  </div>
</form>
    </main>
    <footer>
      <h3>Copyright © 2023 | All rights Reserved</h3>
    </footer>
  </div>
</body>
<script src="js/script.js"></script>
</html>