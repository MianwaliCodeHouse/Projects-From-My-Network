<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?=$_GET['check']?> Checks</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/checks.css">
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

<div class="body">

<!-- ---------------------- -->
<?php
if($_GET['check']==='Monthly'){


?>
<!-- html code  -->
<h1>Monthly Checks</h1>
<main>
      <a href="docs/A Veh/Montly Check A Veh.pdf" target="_blank"><div class="div1">
      <img src="materials/car.png" alt="">A vehicle</div></a>
      <a href="docs/B Veh/Montly check  B veh.pdf" target="_blank"><div class="div2">
      <img src="materials/car.png" alt="">B vehicle</div></a>
      <a href="" target="_blank"><div class="div3">
      <img src="materials/car.png" alt="">C vehicle</div></a>
</main>

<!-- ----------------------------  -->
<?php
}elseif ($_GET['check']==='Quaterly') {
  
?>

<!-- html code  -->
<h1>Quaterly Checks</h1>
<main>
      <a href="docs/A Veh/Quarterly Check A Veh.pdf" target="_blank"><div class="div1">
      <img src="materials/car.png" alt="">A vehicle</div></a>
      <a href="docs/B Veh/Quarterly check  B veh.pdf" target="_blank"><div class="div2">
      <img src="materials/car.png" alt="">B vehicle</div></a>
      <a href="" target="_blank"><div class="div3">
      <img src="materials/car.png" alt="">C vehicle</div></a>
</main>

<!-- -------------------------------------- -->
<?php
}elseif ($_GET['check']==='Annual') {
 
?>

<!-- html code  -->
<h1>Annual Checks</h1>
<main>
      <a href="docs/A Veh/Annually Check A Veh.pdf" target="_blank"><div class="div1">
      <img src="materials/car.png" alt="">A vehicle</div></a>
      <a href="docs/B Veh/Annual check  B veh .pdf" target="_blank"><div class="div2">
      <img src="materials/car.png" alt="">B vehicle</div></a>
      <a href="" target="_blank"><div class="div3">
      <img src="materials/car.png" alt="">C vehicle</div></a>
</main>



<!-- ---------  -->
<?php
}else{
  echo "<h1>Not Found";
}
?>

</div>
<footer>
      <h3>Copyright © 2023 | All rights Reserved</h3>
    </footer>
</div>

</body>
<script src="js/script.js"></script>
</html>