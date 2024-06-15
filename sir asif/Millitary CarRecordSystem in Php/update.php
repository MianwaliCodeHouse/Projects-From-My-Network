<?php
include "db.php";
session_start();

if (isset($_POST['update'])) {
  $BAno=$_POST['BAno'];
  $running=$_POST['running'];
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
  $hydrolic_oil_change=$_POST['hydrolic_oil_change'];
  $hydrolic_oil_due=$_POST['hydrolic_oil_due'];
  $bty_change=$_POST['bty_change'];
  $bty_due=$_POST['bty_due'];
  $qr="UPDATE `vehiclesrecords` SET `running`='$running',`engine_oil_change`='$engine_oil_change',`engine_oil_due`='$engine_oil_due',`fuel_filter_change`='$fuel_filter_change',`fuel_filter_due`='$fuel_filter_due',`air_filter_change`='$air_filter_change',`air_filter_due`='$air_filter_due',`tx_oil_change`='$tx_oil_change',`tx_oil_due`='$tx_oil_due',`diff_oil_change`='$diff_oil_change',`diff_oil_due`='$diff_oil_due',`hydrolic_oil_change`='$hydrolic_oil_change',`hydrolic_oil_due`='$hydrolic_oil_due',`bty_change_date`='$bty_change',`bty_due_date`='$bty_due' Where BA_NO='$BAno'";
  if($rqr=mysqli_query($db,$qr)){
    echo "<script>alert('Your data has been successfully Updated into Database')</script>";
    echo "<a href='home.php' id='back'>.</a>";
    echo "<script>back.click()</script>";
  }else{
    echo "<script>alert('Something is Wrong.Please try again!')</script>";
    echo "<a href='home.php' id='back'>.</a>";
    echo "<script>back.click()</script>";
  }
}

if (isset($_POST['monthly'])) {
  print_r($_POST);
  $BAno=$_POST['BAno'];
  $monthly_check_date=$_POST['monthly_check_date'];
  $monthly_due_date=$_POST['monthly_due_date'];
  $qr="UPDATE `vehiclesrecords` SET `monthly_check_date`='$monthly_check_date',`monthly_due_date`='$monthly_due_date' Where `BA_NO`='$BAno'";
  if($rqr=mysqli_query($db,$qr)){
    echo "<script>alert('Monthly check data has been successfully Updated into Database')</script>";
    echo "<a href='home.php' id='back'>.</a>";
    echo "<script>back.click()</script>";
  }else{
    echo "<script>alert('Something is Wrong.Please try again!')</script>";
    echo "<a href='home.php' id='back'>.</a>";
    echo "<script>back.click()</script>";
  }

}

if (isset($_POST['quaterly'])) {
  print_r($_POST);
  $BAno=$_POST['BAno'];
  $quaterly_check_date=$_POST['quaterly_check_date'];
  $quaterly_due_date=$_POST['quaterly_due_date'];
  $qr="UPDATE `vehiclesrecords` SET `quaterly_check_date`='$quaterly_check_date',`quaterly_due_date`='$quaterly_due_date' Where `BA_NO`='$BAno'";
  if($rqr=mysqli_query($db,$qr)){
    echo "<script>alert('Quaterly check data has been successfully Updated into Database')</script>";
    echo "<a href='home.php' id='back'>.</a>";
    echo "<script>back.click()</script>";
  }else{
    echo "<script>alert('Something is Wrong.Please try again!')</script>";
    echo "<a href='home.php' id='back'>.</a>";
    echo "<script>back.click()</script>";
  }
}

if (isset($_POST['annually'])) {
  print_r($_POST);
  $BAno=$_POST['BAno'];
  $annual_check_date=$_POST['annual_check_date'];
  $annual_due_date=$_POST['annual_due_date'];
  $qr="UPDATE `vehiclesrecords` SET `annual_check_date`='$annual_check_date',`annual_due_date`='$annual_due_date' Where `BA_NO`='$BAno'";
  if($rqr=mysqli_query($db,$qr)){
    echo "<script>alert('Annually check data has been successfully Updated into Database')</script>";
    echo "<a href='home.php' id='back'>.</a>";
    echo "<script>back.click()</script>";
  }else{
    echo "<script>alert('Something is Wrong.Please try again!')</script>";
    echo "<a href='home.php' id='back'>.</a>";
    echo "<script>back.click()</script>";
  }
}


?>