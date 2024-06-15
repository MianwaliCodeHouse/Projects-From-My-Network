<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Notifications</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/SDS.css">
  <link rel="stylesheet" href="css/notification.css">
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
  <h1 id='heading'>Need Update of following Records</h1>
    <table border="1">
  <tr>
    <th>BA_No</th>
    <th>monthly due date</th>
    <th>quaterly due date</th>
    <th>annual due date</th>
    <th>oil due date</th>
    <th>fuel due date</th>
    <th>air due date</th>
    <th>bty due date</th>
  </tr>

<?php

include "db.php";
session_start();
$qr = 'SELECT * FROM `vehiclesrecords`';
$rqr = mysqli_query($db, $qr);
function myfn($change,$due){if($change[0]>=$due[0] && $change[1]>=$due[1] && $change[2]>$due[2]){return true;}else{return false;}}
while ($data = mysqli_fetch_assoc($rqr)) {
  $BAno = $data['BA_No'];
  $monthly_due_date1=$data['monthly_due_date'];
  $quaterly_due_date1=$data['quaterly_due_date'];
  $annual_due_date1=$data['annual_due_date'];

  $air_filter_due1=$data['air_filter_due'];
  $engine_oil_due1=$data['engine_oil_due'];
  $fuel_filter_due1=$data['fuel_filter_due'];
  $bty_due_date1=$data['bty_due_date'];

  $air_filter_due=explode("-",$air_filter_due1);
  $engine_oil_due=explode("-",$engine_oil_due1);
  $fuel_filter_due=explode("-",$fuel_filter_due1);
  $monthly_due_date=explode("-",$monthly_due_date1);
  $quaterly_due_date=explode("-",$quaterly_due_date1);
  $annual_due_date=explode("-",$annual_due_date1);
  $bty_due_date=explode("-",$bty_due_date1);
  
  $da=date("Y/m/d");
  $currentdate=explode('/',$da);
  
  
  $one=myfn($currentdate,$monthly_due_date);
  $two=myfn($currentdate,$quaterly_due_date);
  $three=myfn($currentdate,$annual_due_date);
  $four=myfn($currentdate,$engine_oil_due);
  $five=myfn($currentdate,$fuel_filter_due);
  $six=myfn($currentdate,$air_filter_due);
  $seven=myfn($currentdate,$bty_due_date);
  if($one||$two||$three || $four || $five || $six || $seven){
    
    ?>

  <tr>
    <td><?=$BAno?></td>
    <td><?php if($one){echo $monthly_due_date1;}?></td>
    <td><?php if($two){echo $quaterly_due_date1;}?></td>
    <td><?php if($three){echo $annual_due_date1;}?></td>
    <td><?php if($four){echo $engine_oil_due1;}?></td>
    <td><?php if($five){echo $fuel_filter_due1;}?></td>
    <td><?php if($six){echo $air_filter_due1;}?></td>
    <td><?php if($seven){echo $bty_due_date1;}?></td>
  </tr>

    <?php
  }

  
}
?>
</table>

</main>

<footer>
      <h3>Copyright © 2023 | All rights Reserved</h3>
    </footer>
</div>
</body>
<script src="js/script.js"></script>
</html>