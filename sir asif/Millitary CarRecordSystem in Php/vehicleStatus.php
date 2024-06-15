<?php
include "db.php";
session_start();
if (isset($_POST['submit'])) {
  $BAno = $_POST['BAno'];
  $qr = "select * from vehiclesrecords where BA_NO='$BAno'";
  $rqr = mysqli_query($db, $qr);
  if(mysqli_num_rows($rqr)){
    $data = mysqli_fetch_assoc($rqr);
  }else{
    echo "<script>alert(`'Sorry, Record Not Found from database that's BA NO is $BAno'`)</script>";
    echo "<a href='SDS.php?name=Status' id='back'>.</a>";
    echo "<script>back.click()</script>";
  }
} else {
  header("location: SDS.php?name=Status");
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
  <link rel="stylesheet" href="css/status.css">
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
      <a href="notifications.php">Notifications</a>


    </nav>

    <main>
      <h1>Vehicle Status of " <?php echo $data['BA_No']; ?> "</h1>
      <form action="update.php" method="post">
        <div class="group">
          <b>Type of Vehicle</b>
          <input type="text" value="<?php echo $data['vehicle_type'] ?>" disabled>
        </div>
        <div class="group">
          <b>BA No</b>
          <input type="text" value="<?php echo $data['BA_No']?>" disabled>
          <input type="text" name="BAno" value="<?php echo $data['BA_No']?>" hidden>
        </div>
        <div class="group">
          <b>Make & Type</b>
          <input type="text" value="<?php echo $data['make_and_type'] ?>" disabled>
        </div>

        <div class="group">
          <b>Year of Manufacture</b>
          <input type="number" value="<?php echo $data['year_of_manufacture'] ?>" disabled>
        </div>

        <!-- updateable  -->
        <div class="group">
          <b>Running</b>
          <input type="text" name="running" value="<?php echo $data['running'] ?>">
        </div>

        <div class="group">
          <b>Engine Oil change date</b>
          <input type="date" name="engine_oil_change" value="<?php echo $data['engine_oil_change'] ?>">
        </div>
        <div class="group">
          <b>Engine Oil due date</b>
          <input type="date" name="engine_oil_due" value="<?php echo $data['engine_oil_due'] ?>">
        </div>
        <div class="group">
          <b>Fuel filter change date</b>
          <input type="date" name="fuel_filter_change" value="<?php echo $data['fuel_filter_change'] ?>">
        </div>
        <div class="group">
          <b>Fuel filter due date</b>
          <input type="date" name="fuel_filter_due" value="<?php echo $data['fuel_filter_due'] ?>">
        </div>
        <div class="group">
          <b>Air filter change date</b>
          <input type="date" name="air_filter_change" value="<?php echo $data['air_filter_change'] ?>">
        </div>
        <div class="group">
          <b>Air filter due date</b>
          <input type="date" name="air_filter_due" value="<?php echo $data['air_filter_due'] ?>">
        </div>
        <div class="group">
          <b>Tx Oil change date</b>
          <input type="date" name="tx_oil_change" value="<?php echo $data['Tx_oil_change'] ?>">
        </div>
        <div class="group">
          <b>Tx Oil due date</b>
          <input type="date" name="tx_oil_due" value="<?php echo $data['Tx_oil_due'] ?>">
        </div>
        <div class="group">
          <b>diff Oil change date</b>
          <input type="date" name="diff_oil_change" value="<?php echo $data['diff_oil_change'] ?>">
        </div>
        <div class="group">
          <b>diff Oil due date</b>
          <input type="date" name="diff_oil_due" value="<?php echo $data['diff_oil_due'] ?>">
        </div>
        <div class="group">
          <b>Hydrolic Oil change date</b>
          <input type="date" name="hydrolic_oil_change" value="<?php echo $data['hydrolic_oil_change'] ?>">
        </div>
        <div class="group">
          <b>Hydrolic Oil due date</b>
          <input type="date" name="hydrolic_oil_due" value="<?php echo $data['hydrolic_oil_due'] ?>">
        </div>
        <div class="group">
          <b>Battery change date</b>
          <input type="date" name="bty_change" value="<?php echo $data['bty_change_date'] ?>">
        </div>
        <div class="group">
          <b>Battery due date</b>
          <input type="date" name="bty_due" value="<?php echo $data['bty_due_date'] ?>">
        </div>



        <!-- -------------  -->

        <div class="group">
          <b>Monthly check date</b>
          <input type="date" value="<?php echo $data['monthly_check_date'] ?>" disabled>
        </div>
        <div class="group">
          <b>Monthly due date</b>
          <input type="date" value="<?php echo $data['monthly_due_date'] ?>" disabled>
        </div>
        <div class="group">
          <b>Quaterly check date</b>
          <input type="date" value="<?php echo $data['quaterly_check_date'] ?>" disabled>
        </div>
        <div class="group">
          <b>Quaterly due date</b>
          <input type="date" value="<?php echo $data['quaterly_due_date'] ?>" disabled>
        </div>
        <div class="group">
          <b>Annual check date</b>
          <input type="date" value="<?php echo $data['annual_check_date'] ?>" disabled>
        </div>
        <div class="group">
          <b>Annual due date</b>
          <input type="date" value="<?php echo $data['annual_due_date'] ?>" disabled>
        </div>
        <input type="submit" name='update' value="Update">
      </form>
    </main>
    <hr>
    <div class="checks">
      <a href="updatechecks.php?BAno=<?php echo $data['BA_No'] ?>&check=monthly&vehicle=<?php echo $data['vehicle_type'] ?>">
        <div class="div1">
      <img src="materials/checks.png" alt="">Monthly Checks</div>
      </a>
      <a href="updatechecks.php?BAno=<?php echo $data['BA_No'] ?>&check=quaterly&vehicle=<?php echo $data['vehicle_type'] ?>">
        <div class="div2">
      <img src="materials/checks.png" alt="">Quaterly Checks</div>
      </a>
      <a href="updatechecks.php?BAno=<?php echo $data['BA_No'] ?>&check=annually&vehicle=<?php echo $data['vehicle_type'] ?>">
        <div class="div3">
      <img src="materials/checks.png" alt="">Annual Checks</div>
      </a>
    </div>
    <footer>
      <h3>Copyright © 2023 | All rights Reserved</h3>
    </footer>
  </div>
</body>
<script src="js/script.js"></script>

</html>