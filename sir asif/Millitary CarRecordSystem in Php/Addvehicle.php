<?php
include "db.php";

session_start();
if(isset($_SESSION['MSG'])){
  echo "<script>alert('Data Successfully Submited into Database!')</script>";
  unset($_SESSION['MSG']);
}
if(isset($_SESSION['error'])){
  echo "<script>alert('Record already exists into Database from this BA_NO!')</script>";
  unset($_SESSION['error']);
}
if (isset($_POST['submit'])) {
  
  print_r($_POST);
  $vehicle_type=$_POST['vehicle_type'];

  $ba_no=$_POST['ba_no'] ;
  $make_type=$_POST['make_type'];
  $engine_no=$_POST['engine_no'];
  $chassis_no=$_POST['chassis_no'];
  $year_of_manufacture=$_POST['year_of_manufacture'];
  $no_of_cylinders=$_POST['no_of_cylinders'];
  $horse_power=$_POST['horse_power'];
  $bty_make_type=$_POST['bty_make_type'];
  $status=$_POST['status'];
  $running=$_POST['running'];

  $type_of_fuel=$_POST['type_of_fuel'];
  $wheels=$_POST['wheels'];
  $fuel_tank_capacity=$_POST['fuel_tank_capacity'];
  $engine_oil_capacity=$_POST['engine_oil_capacity'];
  $radiator_capacity=$_POST['radiator_capacity'];
  
  $engine_oil_change=$_POST['engine_oil_change'];
  $engine_oil_due=$_POST['engine_oil_due'];
  $fuel_filter_change=$_POST['fuel_filter_change'];
  $fuel_filter_due=$_POST['fuel_filter_due'];
  $air_filter_change=$_POST['air_filter_change'];
  $air_filter_due=$_POST['air_filter_due'];
  $tx_oil_change=$_POST['tx_oil_change'];
  $tx_oil_due=$_POST['tx_oil_due'];
  $diff_oil_change=$_POST['diff_oil_change'];
  $diff_oil_due=$_POST['diff_oil_due'];
  $bty_change=$_POST['bty_change'];
  $bty_due=$_POST['bty_due'];
  $hydrolic_oil_change=$_POST['hydrolic_oil_change'];
  $hydrolic_oil_due=$_POST['hydrolic_oil_due'];
  $monthly_check_date=$_POST['monthly_check_date'];
  $monthly_due_date=$_POST['monthly_due_date'];
  $quaterly_check_date=$_POST['quaterly_check_date'];
  $quaterly_due_date=$_POST['quaterly_due_date'];
  $annual_check_date=$_POST['annual_check_date'];
  $annual_due_date=$_POST['annual_due_date'];
  

  $fqr="select * from vehiclesrecords where BA_NO='$ba_no'";
  $frqr = mysqli_query($db, $fqr);
  if(mysqli_num_rows($frqr)>=1){
    $_SESSION['error']="already";
    $v=$_GET['vehicle'];
    header("location: Addvehicle.php?vehicle=$v");
  }else{

  // insert data into database 
  $qr="INSERT INTO `vehiclesrecords`(`BA_No`, `make_and_type`, `year_of_manufacture`, `status`, `running`, `engine_oil_change`, `engine_oil_due`, `fuel_filter_change`, `fuel_filter_due`, `air_filter_change`, `air_filter_due`, `Tx_oil_change`, `Tx_oil_due`, `diff_oil_change`, `diff_oil_due`, `monthly_check_date`, `monthly_due_date`, `quaterly_check_date`, `quaterly_due_date`, `annual_check_date`, `annual_due_date`, `hydrolic_oil_change`, `hydrolic_oil_due`, `engine_no`, `chassis_no`, `No_of_cylinder`, `Horse power`, `bty_make_and_type`, `fuel_tank_capacity`, `engine_oil_capacity`, `radiator_capacity`, `type_of_fuel`, `wheels`, `vehicle_type`,`bty_change_date`,`bty_due_date`) VALUES ('$ba_no','$make_type','$year_of_manufacture','$status','$running','$engine_oil_change','$engine_oil_due','$fuel_filter_change','$fuel_filter_due','$air_filter_change','$air_filter_due','$tx_oil_change','$tx_oil_due','$diff_oil_change','$diff_oil_due','$monthly_check_date','$monthly_due_date','$quaterly_check_date','$quaterly_due_date','$annual_check_date','$annual_due_date','$hydrolic_oil_change','$hydrolic_oil_due','$engine_no','$chassis_no','$no_of_cylinders','$horse_power','$bty_make_type','$fuel_tank_capacity','$engine_oil_capacity','$radiator_capacity','$type_of_fuel','$wheels','$vehicle_type','$bty_change','$bty_due')";
  if(mysqli_query($db,$qr)){
    $_SESSION['MSG']="inserted";
    $v=$_GET['vehicle'];
    header("location: Addvehicle.php?vehicle=$v");
  }
}
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
    <h1 class="v-title">ADD <?php echo $_GET['vehicle']; ?></h1>
<form action="" method="post">
  <div class="group">
    <b>Type of Vehicle</b>
    <input type="text" name="vehicle_type" value="<?php echo $_GET['vehicle']; ?>">
  </div>
  <div class="group">
    <b>BA No</b>
    <input type="text" name="ba_no" required>
  </div>
  <div class="group">
    <b>Make & Type</b>
    <input type="text" name="make_type">
  </div>
  <div class="group">
    <b>Engine No</b>
    <input type="text" name="engine_no">
  </div>
  <div class="group">
    <b>Chassis No</b>
    <input type="text" name="chassis_no">
  </div>
  <div class="group">
    <b>Year of Manufacture</b>
    <input type="number" name="year_of_manufacture">
  </div>
  <div class="group">
    <b>No of cysnider</b>
    <input type="number" name="no_of_cylinders">
  </div>
  <div class="group">
    <b>Horse power</b>
    <input type="text" name="horse_power">
  </div>
  <div class="group">
    <b>Bty Make & type</b>
    <input type="text" name="bty_make_type">
  </div>
  <div class="group">
    <b>Status</b>
    <input type="text" name="status">
  </div>
  <div class="group">
    <b>Running</b>
    <input type="text" name="running">
  </div>
  <div class="group">
    <b>Type of Fuel</b>
    <input type="text" name="type_of_fuel">
  </div>
  <div class="group">
    <b>Wheels</b>
    <input type="number" name="wheels">
  </div>
  <div class="group">
    <b>Fuel Tank Capacity</b>
    <input type="text" name="fuel_tank_capacity">
  </div>
  <div class="group">
    <b>Engine oil Capacity</b>
    <input type="text" name="engine_oil_capacity">
  </div>
  <div class="group">
    <b>Radiator Capacity</b>
    <input type="text" name="radiator_capacity">
  </div>
 
  
  <div class="group">
    <b>Engine Oil change date</b>
    <input type="date" name="engine_oil_change">
  </div>
  <div class="group">
    <b>Engine Oil due date</b>
    <input type="date" name="engine_oil_due">
  </div>
  <div class="group">
    <b>Fuel filter change date</b> 
    <input type="date" name="fuel_filter_change">
  </div>
  <div class="group">
    <b>Fuel filter due date</b> 
    <input type="date" name="fuel_filter_due">
  </div>
  <div class="group">
    <b>Air filter change date</b>
    <input type="date" name="air_filter_change">
  </div>
  <div class="group">
    <b>Air filter due date</b>
    <input type="date" name="air_filter_due">
  </div>
  <div class="group">
    <b>Tx Oil change date</b>
    <input type="date" name="tx_oil_change">
  </div>
  <div class="group">
    <b>Tx Oil due date</b>
    <input type="date" name="tx_oil_due">
  </div>
  <div class="group">
    <b>diff Oil change date</b>
    <input type="date" name="diff_oil_change">
  </div>
  <div class="group">
    <b>diff Oil due date</b>
    <input type="date" name="diff_oil_due">
  </div>
  <div class="group">
    <b>Hydrolic Oil change date</b>
    <input type="date" name="hydrolic_oil_change">
  </div>
  <div class="group">
    <b>Hydrolic Oil due date</b>
    <input type="date" name="hydrolic_oil_due">
  </div>
  <div class="group">
    <b>Battery change date</b>
    <input type="date" name="bty_change">
  </div>
  <div class="group">
    <b>Battery due date</b>
    <input type="date" name="bty_due">
  </div>
  <div class="group">
    <b>Monthly check date</b>
    <input type="date" name="monthly_check_date">
  </div>
  <div class="group">
    <b>Monthly due date</b>
    <input type="date" name="monthly_due_date">
  </div>
  <div class="group">
    <b>Quaterly check date</b>
    <input type="date" name="quaterly_check_date">
  </div>
  <div class="group">
    <b>Quaterly due date</b>
    <input type="date" name="quaterly_due_date">
  </div>
  <div class="group">
    <b>Annual check date</b>
    <input type="date" name="annual_check_date">
  </div>
  <div class="group">
    <b>Annual due date</b>
    <input type="date" name="annual_due_date">
  </div>
  <input type="submit" name='submit' value="Submit">
</form>
    </main>
    <footer>
      <h3>Copyright © 2023 | All rights Reserved</h3>
    </footer>
  </div>
</body>
<script src="js/script.js"></script>
</html>