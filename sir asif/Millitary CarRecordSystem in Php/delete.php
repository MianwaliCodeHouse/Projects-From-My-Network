<?php
include "db.php";
session_start();
if(isset($_POST["submit"])){
  $BAno=$_POST['BAno'];
  $qr = "DELETE FROM `vehiclesrecords` WHERE BA_NO='$BAno'";
  if (mysqli_query($db,$qr)==True) {
    echo "<script>alert(`'Record Successfully Deleted from database that's BA NO is $BAno'`)</script>";
    echo "<a href='SDS.php?name=Delete' id='back'>.</a>";
    echo "<script>back.click()</script>";
  }else{
    
    echo "<script>alert(`'Sorry, Record Not Found from database that's BA NO is $BAno'`)</script>";
    echo "<a href='SDS.php?name=Delete' id='back'>.</a>";
    echo "<script>back.click()</script>";
  }

}

?>