
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
  <style>
    li{
      color: black !important;
    }
  </style>
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

<!-- for A_vehicle  -->

      <?php 
if ($_GET['vehicle']=='A_vehicle' && $_GET['check']=='monthly') {
  

      ?>
      
      <form action="update.php" method="post">
        <div class="group">
          <b>Type of Vehicle</b>
          <input type="text" value="<?php echo $_GET['vehicle'] ?>" >
        </div>
        <div class="group">
          <b>BA No</b>
          <input type="text" name="BAno" value="<?php echo $_GET['BAno'] ?>" >
        </div>

        <div class="group">
          <b>Monthly check date</b>
          <input type="date" name="monthly_check_date" required>
        </div>
        <div class="group">
          <b>Monthly due date</b>
          <input type="date" name="monthly_due_date" required>
        </div>
        <div class="group">
          <b> Exterior </b>
          <input type="checkbox" required>
        </div>
        <div class="group">
        <ul>
          <li>External body </li>
          <li>Hatches & nuts </li>
          <li>Additionally installed equipment </li>
          <li>Head Light, Indicator, Stop Light etc. </li>
          <li>Door, Cupola etc. </li>
        </ul>
        </div>
        <div class="group">
          <b>  Tracks  
 </b>
 <input type="checkbox" required>
        </div>
        <div class="group">
        <ul>
          <li>Shock absorbers  </li>
          <li>Track pins </li>
          <li>Track tensioner & road wheels </li>
        </ul>
        </div>
        <div class="group">
          <b> Inside Engine Deck   </b>
          <input type="checkbox" required>
        </div>
        <div class="group">
        <ul>
          <li>Fan  </li>
          <li>Drive & air cleaner oil </li>
          <li>Radiator  </li>
          <li>Fan friction clutch </li>
          <li>Toothed coupling </li>
        </ul>
        </div>
        <div class="group">
          <b>  Fighting Compartment  
   </b>
   <input type="checkbox" required>
        </div>
        <div class="group">
        <ul>
          <li>Electrical connections </li>
          <li>Fire extinguisher system </li>
          <li>Turret accessories  </li>
          <li>Cabin Lights </li>
          <li>Electrical units </li>
        </ul>
        </div>
        <div class="group">
          <b>   Driver Compartment    
   </b>
   <input type="checkbox" required>
        </div>
        <div class="group">
        <ul>
          <li>First aid kit </li>
          <li>Air bottles </li>
          <li>Levers & pedals of control linkages </li>
          <li>Battery </li>
        </ul>
        </div>
        <div class="group">
          <b>  Engine     
   </b>
   <input type="checkbox" required>
        </div>
        <div class="group">
        <ul>
          <li>Start-up operation </li>
          <li>Assemblies and Belts </li>
          <li>Fluids/water </li>
          <li>Intake Air Heater </li>
          <li>Hoses of Brake/Clutch Systems </li>
          <li>Water Pump, Fan/Drive Belts & Pulleys </li>
          <li>Engine Mountings </li>
          <li>Engine Head Bolts </li>
          <li>Valve Mechanism & Cover Gaskets </li>
          <li>Breather Caps and Ventilators </li>
          <li>Fuel Lines </li>
          <li>Fuel/Air/Oil Filters </li>
          <li>Exhaust outlets </li>
          <li>Oil/Fuel Level </li>
        </ul>
        </div>
        <div class="group">
          <b>  Suspension System  
 
   </b>
   <input type="checkbox" required>
        </div>
        <div class="group">
        <ul>
          <li>Shock absorber, hydraulic buffer  </li>
          <li>Balance mechanism </li>
        </ul>
        </div>
        <div class="group">
          <b> Specific Periodic Checks & Services   
  
 
   </b>
   <input type="checkbox" required>
        </div>
        <div class="group">
        <ul>
          <li>Start/move within MT park  (5-10 Minutes) </li>
          <li>Road Test </li>
          <li>Tool Kit </li>
          <li>On-Board Diagnostic(OBD) </li>
          <li>Engine Compression  </li>
          <li>Lubrication </li>
          <li>Greasing </li>
          <li>Radiator flushing </li>
          <li>Fuel tank flushing  </li>
          <li>(6 Monthly - May & Sep) </li>
          <li>Hydraulic system assemblies </li>
          <li>Track tension testing </li>
          <li>Documentation </li>
        </ul>
        </div>
        <input type="submit" name="monthly" value="Update">
      </form>

<?php
}else if ($_GET['vehicle']=='A_vehicle' && $_GET['check']=='quaterly') {
  # code...

?>


      

      <form action="update.php" method="post">
        <div class="group">
          <b>Type of Vehicle</b>
          <input type="text" value="<?php echo $_GET['vehicle'] ?>">
        </div>
        <div class="group">
          <b>BA No</b>
          <input type="text" name="BAno" value="<?php echo $_GET['BAno'] ?>">
        </div>

        <div class="group">
          <b>Quaterly check date</b>
          <input type="date" name="quaterly_check_date" value="">
        </div>
        <div class="group">
          <b>Quaterly due date</b>
          <input type="date" name="quaterly_due_date" value="">
        </div>
        <div class="group">
          <b> Exterior </b>
          <input type="checkbox" required>
        </div>
        <div class="group">
        <ul>
          <li>External body </li>
          <li>Hatches & nuts </li>
          <li>Additionally installed equipment </li>
          <li>Head Light, Indicator, Stop Light etc. </li>
          <li>Door, Cupola etc. </li>
        </ul>
        </div>
        <div class="group">
          <b>  Tracks  
 </b>
 <input type="checkbox" required>
        </div>
        <div class="group">
        <ul>
          <li>Shock absorbers  </li>
          <li>Track pins </li>
          <li>Track tensioner & road wheels </li>
        </ul>
        </div>
        <div class="group">
          <b> Inside Engine Deck   </b>
          <input type="checkbox" required>
        </div>
        <div class="group">
        <ul>
          <li>Fan  </li>
          <li>Drive & air cleaner oil </li>
          <li>Radiator  </li>
          <li>Fan friction clutch </li>
          <li>Toothed coupling </li>
        </ul>
        </div>
        <div class="group">
          <b>  Fighting Compartment  
   </b>
   <input type="checkbox" required>
        </div>
        <div class="group">
        <ul>
          <li>Electrical connections </li>
          <li>Fire extinguisher system </li>
          <li>Turret accessories  </li>
          <li>Cabin Lights </li>
          <li>Electrical units </li>
        </ul>
        </div>
        <div class="group">
          <b>   Driver Compartment    
   </b>
   <input type="checkbox" required>
        </div>
        <div class="group">
        <ul>
          <li>First aid kit </li>
          <li>Air bottles </li>
          <li>Levers & pedals of control linkages </li>
          <li>Battery </li>
        </ul>
        </div>
        <div class="group">
          <b>  Engine     
   </b>
   <input type="checkbox" required>
        </div>
        <div class="group">
        <ul>
          <li>Start-up operation </li>
          <li>Assemblies and Belts </li>
          <li>Fluids/water </li>
          <li>Intake Air Heater </li>
          <li>Hoses of Brake/Clutch Systems </li>
          <li>Water Pump, Fan/Drive Belts & Pulleys </li>
          <li>Engine Mountings </li>
          <li>Engine Head Bolts </li>
          <li>Valve Mechanism & Cover Gaskets </li>
          <li>Breather Caps and Ventilators </li>
          <li>Fuel Lines </li>
          <li>Fuel/Air/Oil Filters </li>
          <li>Exhaust outlets </li>
          <li>Oil/Fuel Level </li>
        </ul>
        </div>
        <div class="group">
          <b>  Suspension System  
 
   </b>
   <input type="checkbox" required>
        </div>
        <div class="group">
        <ul>
          <li>Shock absorber, hydraulic buffer  </li>
          <li>Balance mechanism </li>
        </ul>
        </div>
        <div class="group">
          <b> Specific Periodic Checks & Services   
  
 
   </b>
   <input type="checkbox" required>
        </div>
        <div class="group">
        <ul>
          <li>Start/move within MT park  (5-10 Minutes) </li>
          <li>Road Test </li>
          <li>Tool Kit </li>
          <li>On-Board Diagnostic(OBD) </li>
          <li>Engine Compression  </li>
          <li>Lubrication </li>
          <li>Greasing </li>
          <li>Radiator flushing </li>
          <li>Fuel tank flushing  </li>
          <li>(6 Monthly - May & Sep) </li>
          <li>Hydraulic system assemblies </li>
          <li>Track tension testing </li>
          <li>Documentation </li>
        </ul>
        </div>
        <input type="submit" name="quaterly" value="Update">
      </form>



<?php
}if ($_GET['vehicle']=='A_vehicle' && $_GET['check']=='annually') {
  # code...

?>


      <form action="update.php" method="post">
        <div class="group">
          <b>Type of Vehicle</b>
          <input type="text" name="BAno" value="<?php echo $_GET['vehicle'] ?>">
        </div>
        <div class="group">
          <b>BA No</b>
          <input type="text" value="<?php echo $_GET['BAno'] ?>">
        </div>

        <div class="group">
          <b>Annual check date</b>
          <input type="date" name="annual_check_date" value="">
        </div>
        <div class="group">
          <b>Annual due date</b>
          <input type="date" name="annual_due_date" value="">
        </div>
        <div class="group">
          <b> Exterior </b>
          <input type="checkbox" required>
        </div>
        <div class="group">
        <ul>
          <li>External body </li>
          <li>Hatches & nuts </li>
          <li>Additionally installed equipment </li>
          <li>Head Light, Indicator, Stop Light etc. </li>
          <li>Door, Cupola etc. </li>
        </ul>
        </div>
        <div class="group">
          <b>  Tracks  
 </b>
 <input type="checkbox" required>
        </div>
        <div class="group">
        <ul>
          <li>Shock absorbers  </li>
          <li>Track pins </li>
          <li>Track tensioner & road wheels </li>
        </ul>
        </div>
        <div class="group">
          <b> Inside Engine Deck   </b>
          <input type="checkbox" required>
        </div>
        <div class="group">
        <ul>
          <li>Fan  </li>
          <li>Drive & air cleaner oil </li>
          <li>Radiator  </li>
          <li>Fan friction clutch </li>
          <li>Toothed coupling </li>
        </ul>
        </div>
        <div class="group">
          <b>  Fighting Compartment  
   </b>
   <input type="checkbox" required>
        </div>
        <div class="group">
        <ul>
          <li>Electrical connections </li>
          <li>Fire extinguisher system </li>
          <li>Turret accessories  </li>
          <li>Cabin Lights </li>
          <li>Electrical units </li>
        </ul>
        </div>
        <div class="group">
          <b>   Driver Compartment    
   </b>
   <input type="checkbox" required>
        </div>
        <div class="group">
        <ul>
          <li>First aid kit </li>
          <li>Air bottles </li>
          <li>Levers & pedals of control linkages </li>
          <li>Battery </li>
        </ul>
        </div>
        <div class="group">
          <b>  Engine     
   </b>
   <input type="checkbox" required>
        </div>
        <div class="group">
        <ul>
          <li>Start-up operation </li>
          <li>Assemblies and Belts </li>
          <li>Fluids/water </li>
          <li>Intake Air Heater </li>
          <li>Hoses of Brake/Clutch Systems </li>
          <li>Water Pump, Fan/Drive Belts & Pulleys </li>
          <li>Engine Mountings </li>
          <li>Engine Head Bolts </li>
          <li>Valve Mechanism & Cover Gaskets </li>
          <li>Breather Caps and Ventilators </li>
          <li>Fuel Lines </li>
          <li>Fuel/Air/Oil Filters </li>
          <li>Exhaust outlets </li>
          <li>Oil/Fuel Level </li>
        </ul>
        </div>
        <div class="group">
          <b>  Suspension System  
 
   </b>
   <input type="checkbox" required>
        </div>
        <div class="group">
        <ul>
          <li>Shock absorber, hydraulic buffer  </li>
          <li>Balance mechanism </li>
        </ul>
        </div>
        <div class="group">
          <b> Specific Periodic Checks & Services   
  
 
   </b>
   <input type="checkbox" required>
        </div>
        <div class="group">
        <ul>
          <li>Start/move within MT park  (5-10 Minutes) </li>
          <li>Road Test </li>
          <li>Tool Kit </li>
          <li>On-Board Diagnostic(OBD) </li>
          <li>Engine Compression  </li>
          <li>Lubrication </li>
          <li>Greasing </li>
          <li>Radiator flushing </li>
          <li>Fuel tank flushing  </li>
          <li>(6 Monthly - May & Sep) </li>
          <li>Hydraulic system assemblies </li>
          <li>Track tension testing </li>
          <li>Documentation </li>
        </ul>
        </div>
        <input type="submit" name="annually" value="Update">
      </form>

<?php
}
?>


<!-- --------------  -->






<!-- for B_vehicle  -->

      <?php 
if ($_GET['vehicle']=='B_vehicle' && $_GET['check']=='monthly') {
  

      ?>
      
      <form action="update.php" method="post">
        <div class="group">
          <b>Type of Vehicle</b>
          <input type="text" value="<?php echo $_GET['vehicle'] ?>" >
        </div>
        <div class="group">
          <b>BA No</b>
          <input type="text" name="BAno" value="<?php echo $_GET['BAno'] ?>" >
        </div>

        <div class="group">
          <b>Monthly check date</b>
          <input type="date" name="monthly_check_date" >
        </div>
        <div class="group">
          <b>Monthly due date</b>
          <input type="date" name="monthly_due_date" >
        </div>
        
        <div class="group">
          <b> Exterior </b>
          <input type="checkbox" required>
        </div>
        <div class="group">
        <ul>
          <li>External Body </li>
          <li>Bumpers, Pinttle Hooks, Doors etc. </li>
          <li>Tyres </li>
          <li>Tarpaulin </li>
          <li>Hatches, Travelling locks etc. </li>
          <li>Head Light, Indicator, Stop Light </li>
          <li>Wind Screen, Door/Driver Mirror etc. </li>
        </ul>
        </div>
        <div class="group">
          <b>  Driver Cabin 
 
 </b>
 <input type="checkbox" required>
        </div>
        <div class="group">
        <ul>
          <li>Gauges/instruments </li>
          <li>Brake/Clutch/Accelerator Pedals </li>
          <li>Seats, Upholstery </li>
          <li>Cabin Lights </li>
          <li>Heater System </li>
        </ul>
        </div>
        <div class="group">
          <b>Suspension & Transmission Sys 
  </b>
          <input type="checkbox" required>
        </div>
        <div class="group">
        <ul>
          <li>Shock Absorber </li>
          <li>Steering Gear Box </li>
          <li>Power Steering </li>
          <li>Axle Housing, Axle Shaft </li>
          <li>Propeller Shaft, Universal Joint </li>
          <li>Transmission Gear Box, Transfer Case </li>
          <li>Differential </li>
        </ul>
        </div>
        <div class="group">
          <b>  Brake System 
  
   </b>
   <input type="checkbox" required>
        </div>
        <div class="group">
        <ul>
          <li>Brake shoes/linings/drum/disc </li>
          <li>Other brake system components </li>
        </ul>
        </div>
        <div class="group">
          <b>Fuel System    
   </b>
   <input type="checkbox" required>
        </div>
        <div class="group">
        <ul>
          <li>Fuel Tank, lines & connections </li>
          <li>Fuel Injector Nozzle/VCV/PCV </li>
          <li>Fuel Injection/Low-High Pressure </li>
          <li>Pump </li>
        </ul>
        </div>
        <div class="group">
          <b>  Engine     
   </b>
   <input type="checkbox" required>
        </div>
        <div class="group">
        <ul>
          <li>Start-up operation </li>
          <li>Assemblies and Belts </li>
          <li>Fluids/water </li>
          <li>Intake Air Heater </li>
          <li>Hoses of Brake/Clutch Systems </li>
          <li>Water Pump, Fan/Drive Belts & Pulleys </li>
          <li>Engine Mountings </li>
          <li>Engine Head Bolts </li>
          <li>Valve Mechanism & Cover Gaskets </li>
          <li>Breather Caps and Ventilators </li>
          <li>Fuel Lines </li>
          <li>Fuel/Air/Oil Filters </li>
          <li>Exhaust outlets </li>
          <li>Oil/Fuel Level </li>
        </ul>
        </div>
        <div class="group">
          <b>Cooling System 

   </b>
   <input type="checkbox" required>
        </div>
        <div class="group">
        <ul>
          <li>Radiator Core & other sub-assemblies </li>
          <li>Cabin Air Conditioning Filter </li>
          <li>Oil Cooler and Inter Cooler </li>
        </ul>
        </div>
        <div class="group">
          <b>Electrical System 
  
  
 
   </b>
   <input type="checkbox" required>
        </div>
        <div class="group">
        <ul>
          <li>Electrical Wires </li>
          <li>Spark Plugs and CB Points </li>
          <li>Distributor cap, Rotor Points, Shaft </li>
          <li>Advance Units, Coil and Wiring, Ignition Timings </li>
          <li>Battery </li>
          <li>EFI Sensors/ECU </li>
          <li>Self-Starter & Alternator  </li>
          <li>Wind Shield Motor & Wiper </li>
        </ul>
        </div>
        <div class="group">
          <b> Specific Periodic Checks & Services   
  
 
   </b>
   <input type="checkbox" required>
        </div>
        <div class="group">
        <ul>
          <li>Start/move within MT park  (5-10 Minutes) </li>
          <li>Road Test </li>
          <li>Tool Kit </li>
          <li>On-Board Diagnostic(OBD) </li>
          <li>Engine Compression  </li>
          <li>Lubrication </li>
          <li>Greasing </li>
          <li>Radiator flushing </li>
          <li>Fuel tank flushing  </li>
          <li>(6 Monthly - May & Sep) </li>
          <li>Hydraulic system assemblies </li>
          <li>Track tension testing </li>
          <li>Documentation </li>
        </ul>
        </div>
        <input type="submit" name='monthly' value="Update">
      </form>

<?php
}else if ($_GET['vehicle']=='B_vehicle' && $_GET['check']=='quaterly') {

?>


      <!-- --------------  -->

      <form action="update.php" method="post">
        <div class="group">
          <b>Type of Vehicle</b>
          <input type="text" value="<?php echo $_GET['vehicle'] ?>">
        </div>
        <div class="group">
          <b>BA No</b>
          <input type="text" name="BAno" value="<?php echo $_GET['BAno'] ?>">
        </div>

        <div class="group">
          <b>Quaterly check date</b>
          <input type="date" name="quaterly_check_date" value="">
        </div>
        <div class="group">
          <b>Quaterly due date</b>
          <input type="date" name="quaterly_due_date" value="">
        </div>
        <div class="group">
          <b> Exterior </b>
          <input type="checkbox" required>
        </div>
        <div class="group">
        <ul>
          <li>External Body </li>
          <li>Bumpers, Pinttle Hooks, Doors etc. </li>
          <li>Tyres </li>
          <li>Tarpaulin </li>
          <li>Hatches, Travelling locks etc. </li>
          <li>Head Light, Indicator, Stop Light </li>
          <li>Wind Screen, Door/Driver Mirror etc. </li>
        </ul>
        </div>
        <div class="group">
          <b>  Driver Cabin 
 
 </b>
 <input type="checkbox" required>
        </div>
        <div class="group">
        <ul>
          <li>Gauges/instruments </li>
          <li>Brake/Clutch/Accelerator Pedals </li>
          <li>Seats, Upholstery </li>
          <li>Cabin Lights </li>
          <li>Heater System </li>
        </ul>
        </div>
        <div class="group">
          <b>Suspension & Transmission Sys 
  </b>
          <input type="checkbox" required>
        </div>
        <div class="group">
        <ul>
          <li>Shock Absorber </li>
          <li>Steering Gear Box </li>
          <li>Power Steering </li>
          <li>Axle Housing, Axle Shaft </li>
          <li>Propeller Shaft, Universal Joint </li>
          <li>Transmission Gear Box, Transfer Case </li>
          <li>Differential </li>
        </ul>
        </div>
        <div class="group">
          <b>  Brake System 
  
   </b>
   <input type="checkbox" required>
        </div>
        <div class="group">
        <ul>
          <li>Brake shoes/linings/drum/disc </li>
          <li>Other brake system components </li>
        </ul>
        </div>
        <div class="group">
          <b>Fuel System    
   </b>
   <input type="checkbox" required>
        </div>
        <div class="group">
        <ul>
          <li>Fuel Tank, lines & connections </li>
          <li>Fuel Injector Nozzle/VCV/PCV </li>
          <li>Fuel Injection/Low-High Pressure </li>
          <li>Pump </li>
        </ul>
        </div>
        <div class="group">
          <b>  Engine     
   </b>
   <input type="checkbox" required>
        </div>
        <div class="group">
        <ul>
          <li>Start-up operation </li>
          <li>Assemblies and Belts </li>
          <li>Fluids/water </li>
          <li>Intake Air Heater </li>
          <li>Hoses of Brake/Clutch Systems </li>
          <li>Water Pump, Fan/Drive Belts & Pulleys </li>
          <li>Engine Mountings </li>
          <li>Engine Head Bolts </li>
          <li>Valve Mechanism & Cover Gaskets </li>
          <li>Breather Caps and Ventilators </li>
          <li>Fuel Lines </li>
          <li>Fuel/Air/Oil Filters </li>
          <li>Exhaust outlets </li>
          <li>Oil/Fuel Level </li>
        </ul>
        </div>
        <div class="group">
          <b>Cooling System 

   </b>
   <input type="checkbox" required>
        </div>
        <div class="group">
        <ul>
          <li>Radiator Core & other sub-assemblies </li>
          <li>Cabin Air Conditioning Filter </li>
          <li>Oil Cooler and Inter Cooler </li>
        </ul>
        </div>
        <div class="group">
          <b>Electrical System 
  
  
 
   </b>
   <input type="checkbox" required>
        </div>
        <div class="group">
        <ul>
          <li>Electrical Wires </li>
          <li>Spark Plugs and CB Points </li>
          <li>Distributor cap, Rotor Points, Shaft </li>
          <li>Advance Units, Coil and Wiring, Ignition Timings </li>
          <li>Battery </li>
          <li>EFI Sensors/ECU </li>
          <li>Self-Starter & Alternator  </li>
          <li>Wind Shield Motor & Wiper </li>
        </ul>
        </div>
        <div class="group">
          <b> Specific Periodic Checks & Services   
  
 
   </b>
   <input type="checkbox" required>
        </div>
        <div class="group">
        <ul>
          <li>Start/move within MT park  (5-10 Minutes) </li>
          <li>Road Test </li>
          <li>Tool Kit </li>
          <li>On-Board Diagnostic(OBD) </li>
          <li>Engine Compression  </li>
          <li>Lubrication </li>
          <li>Greasing </li>
          <li>Radiator flushing </li>
          <li>Fuel tank flushing  </li>
          <li>(6 Monthly - May & Sep) </li>
          <li>Hydraulic system assemblies </li>
          <li>Track tension testing </li>
          <li>Documentation </li>
        </ul>
        </div>
        <input type="submit" name='quaterly' value="Update">
      </form>



<?php
}if ($_GET['vehicle']=='B_vehicle' && $_GET['check']=='annually') {

?>

      <!-- ----------- -->
      <form action="update.php" method="post">
        <div class="group">
          <b>Type of Vehicle</b>
          <input type="text" value="<?php echo $_GET['vehicle'] ?>">
        </div>
        <div class="group">
          <b>BA No</b>
          <input type="text" name="BAno" value="<?php echo $_GET['BAno'] ?>">
        </div>

        <div class="group">
          <b>Annual check date</b>
          <input type="date" name="annual_check_date" value="">
        </div>
        <div class="group">
          <b>Annual due date</b>
          <input type="date" name="annual_due_date" value="">
        </div>
        <div class="group">
          <b> Exterior </b>
          <input type="checkbox" required>
        </div>
        <div class="group">
        <ul>
          <li>External Body </li>
          <li>Bumpers, Pinttle Hooks, Doors etc. </li>
          <li>Tyres </li>
          <li>Tarpaulin </li>
          <li>Hatches, Travelling locks etc. </li>
          <li>Head Light, Indicator, Stop Light </li>
          <li>Wind Screen, Door/Driver Mirror etc. </li>
        </ul>
        </div>
        <div class="group">
          <b>  Driver Cabin 
 
 </b>
 <input type="checkbox" required>
        </div>
        <div class="group">
        <ul>
          <li>Gauges/instruments </li>
          <li>Brake/Clutch/Accelerator Pedals </li>
          <li>Seats, Upholstery </li>
          <li>Cabin Lights </li>
          <li>Heater System </li>
        </ul>
        </div>
        <div class="group">
          <b>Suspension & Transmission Sys 
  </b>
          <input type="checkbox" required>
        </div>
        <div class="group">
        <ul>
          <li>Shock Absorber </li>
          <li>Steering Gear Box </li>
          <li>Power Steering </li>
          <li>Axle Housing, Axle Shaft </li>
          <li>Propeller Shaft, Universal Joint </li>
          <li>Transmission Gear Box, Transfer Case </li>
          <li>Differential </li>
        </ul>
        </div>
        <div class="group">
          <b>  Brake System 
  
   </b>
   <input type="checkbox" required>
        </div>
        <div class="group">
        <ul>
          <li>Brake shoes/linings/drum/disc </li>
          <li>Other brake system components </li>
        </ul>
        </div>
        <div class="group">
          <b>Fuel System    
   </b>
   <input type="checkbox" required>
        </div>
        <div class="group">
        <ul>
          <li>Fuel Tank, lines & connections </li>
          <li>Fuel Injector Nozzle/VCV/PCV </li>
          <li>Fuel Injection/Low-High Pressure </li>
          <li>Pump </li>
        </ul>
        </div>
        <div class="group">
          <b>  Engine     
   </b>
   <input type="checkbox" required>
        </div>
        <div class="group">
        <ul>
          <li>Start-up operation </li>
          <li>Assemblies and Belts </li>
          <li>Fluids/water </li>
          <li>Intake Air Heater </li>
          <li>Hoses of Brake/Clutch Systems </li>
          <li>Water Pump, Fan/Drive Belts & Pulleys </li>
          <li>Engine Mountings </li>
          <li>Engine Head Bolts </li>
          <li>Valve Mechanism & Cover Gaskets </li>
          <li>Breather Caps and Ventilators </li>
          <li>Fuel Lines </li>
          <li>Fuel/Air/Oil Filters </li>
          <li>Exhaust outlets </li>
          <li>Oil/Fuel Level </li>
        </ul>
        </div>
        <div class="group">
          <b>Cooling System 

   </b>
   <input type="checkbox" required>
        </div>
        <div class="group">
        <ul>
          <li>Radiator Core & other sub-assemblies </li>
          <li>Cabin Air Conditioning Filter </li>
          <li>Oil Cooler and Inter Cooler </li>
        </ul>
        </div>
        <div class="group">
          <b>Electrical System 
  
  
 
   </b>
   <input type="checkbox" required>
        </div>
        <div class="group">
        <ul>
          <li>Electrical Wires </li>
          <li>Spark Plugs and CB Points </li>
          <li>Distributor cap, Rotor Points, Shaft </li>
          <li>Advance Units, Coil and Wiring, Ignition Timings </li>
          <li>Battery </li>
          <li>EFI Sensors/ECU </li>
          <li>Self-Starter & Alternator  </li>
          <li>Wind Shield Motor & Wiper </li>
        </ul>
        </div>
        <div class="group">
          <b> Specific Periodic Checks & Services   
  
 
   </b>
   <input type="checkbox" required>
        </div>
        <div class="group">
        <ul>
          <li>Start/move within MT park  (5-10 Minutes) </li>
          <li>Road Test </li>
          <li>Tool Kit </li>
          <li>On-Board Diagnostic(OBD) </li>
          <li>Engine Compression  </li>
          <li>Lubrication </li>
          <li>Greasing </li>
          <li>Radiator flushing </li>
          <li>Fuel tank flushing  </li>
          <li>(6 Monthly - May & Sep) </li>
          <li>Hydraulic system assemblies </li>
          <li>Track tension testing </li>
          <li>Documentation </li>
        </ul>
        </div>
        <input type="submit" name="annually" value="Update">
      </form>

<?php
}
?>




<!-- --------------  -->




<!-- for C_vehicle  -->

<?php 
if ($_GET['vehicle']=='C_vehicle' && $_GET['check']=='monthly') {
  

      ?>
      
      <form action="update.php" method="post">
        <div class="group">
          <b>Type of Vehicle</b>
          <input type="text" value="<?php echo $_GET['vehicle'] ?>" >
        </div>
        <div class="group">
          <b>BA No</b>
          <input type="text" name="BAno" value="<?php echo $_GET['BAno'] ?>" >
        </div>

        <div class="group">
          <b>Monthly check date</b>
          <input type="date" name="monthly_check_date" >
        </div>
        <div class="group">
          <b>Monthly due date</b>
          <input type="date" name="monthly_due_date" >
        </div>
        <div class="group">
          <b> Exterior </b>
          <input type="checkbox" required>
        </div>
        <div class="group">
        <ul>
          <li>External body </li>
          <li>Hatches & nuts </li>
          <li>Additionally installed equipment </li>
          <li>Head Light, Indicator, Stop Light etc. </li>
          <li>Door, Cupola etc. </li>
        </ul>
        </div>
        <div class="group">
          <b>  Tracks  
 </b>
 <input type="checkbox" required>
        </div>
        <div class="group">
        <ul>
          <li>Shock absorbers  </li>
          <li>Track pins </li>
          <li>Track tensioner & road wheels </li>
        </ul>
        </div>
        <div class="group">
          <b> Inside Engine Deck   </b>
          <input type="checkbox" required>
        </div>
        <div class="group">
        <ul>
          <li>Fan  </li>
          <li>Drive & air cleaner oil </li>
          <li>Radiator  </li>
          <li>Fan friction clutch </li>
          <li>Toothed coupling </li>
        </ul>
        </div>
        <div class="group">
          <b>  Fighting Compartment  
   </b>
   <input type="checkbox" required>
        </div>
        <div class="group">
        <ul>
          <li>Electrical connections </li>
          <li>Fire extinguisher system </li>
          <li>Turret accessories  </li>
          <li>Cabin Lights </li>
          <li>Electrical units </li>
        </ul>
        </div>
        <div class="group">
          <b>   Driver Compartment    
   </b>
   <input type="checkbox" required>
        </div>
        <div class="group">
        <ul>
          <li>First aid kit </li>
          <li>Air bottles </li>
          <li>Levers & pedals of control linkages </li>
          <li>Battery </li>
        </ul>
        </div>
        <div class="group">
          <b>  Engine     
   </b>
   <input type="checkbox" required>
        </div>
        <div class="group">
        <ul>
          <li>Start-up operation </li>
          <li>Assemblies and Belts </li>
          <li>Fluids/water </li>
          <li>Intake Air Heater </li>
          <li>Hoses of Brake/Clutch Systems </li>
          <li>Water Pump, Fan/Drive Belts & Pulleys </li>
          <li>Engine Mountings </li>
          <li>Engine Head Bolts </li>
          <li>Valve Mechanism & Cover Gaskets </li>
          <li>Breather Caps and Ventilators </li>
          <li>Fuel Lines </li>
          <li>Fuel/Air/Oil Filters </li>
          <li>Exhaust outlets </li>
          <li>Oil/Fuel Level </li>
        </ul>
        </div>
        <div class="group">
          <b>  Suspension System  
 
   </b>
   <input type="checkbox" required>
        </div>
        <div class="group">
        <ul>
          <li>Shock absorber, hydraulic buffer  </li>
          <li>Balance mechanism </li>
        </ul>
        </div>
        <div class="group">
          <b> Specific Periodic Checks & Services   
  
 
   </b>
   <input type="checkbox" required>
        </div>
        <div class="group">
        <ul>
          <li>Start/move within MT park  (5-10 Minutes) </li>
          <li>Road Test </li>
          <li>Tool Kit </li>
          <li>On-Board Diagnostic(OBD) </li>
          <li>Engine Compression  </li>
          <li>Lubrication </li>
          <li>Greasing </li>
          <li>Radiator flushing </li>
          <li>Fuel tank flushing  </li>
          <li>(6 Monthly - May & Sep) </li>
          <li>Hydraulic system assemblies </li>
          <li>Track tension testing </li>
          <li>Documentation </li>
        </ul>
        </div>
        <input type="submit" name="monthly" value="Update">
      </form>

<?php
}else if ($_GET['vehicle']=='C_vehicle' && $_GET['check']=='quaterly') {
  # code...

?>


      

      <form action="update.php" method="post">
        <div class="group">
          <b>Type of Vehicle</b>
          <input type="text" value="<?php echo $_GET['vehicle'] ?>">
        </div>
        <div class="group">
          <b>BA No</b>
          <input type="text" name="BAno" value="<?php echo $_GET['BAno'] ?>">
        </div>

        <div class="group">
          <b>Quaterly check date</b>
          <input type="date" name="quaterly_check_date" value="">
        </div>
        <div class="group">
          <b>Quaterly due date</b>
          <input type="date" name="quaterly_due_date" value="">
        </div>
        <div class="group">
          <b> Exterior </b>
          <input type="checkbox" required>
        </div>
        <div class="group">
        <ul>
          <li>External body </li>
          <li>Hatches & nuts </li>
          <li>Additionally installed equipment </li>
          <li>Head Light, Indicator, Stop Light etc. </li>
          <li>Door, Cupola etc. </li>
        </ul>
        </div>
        <div class="group">
          <b>  Tracks  
 </b>
 <input type="checkbox" required>
        </div>
        <div class="group">
        <ul>
          <li>Shock absorbers  </li>
          <li>Track pins </li>
          <li>Track tensioner & road wheels </li>
        </ul>
        </div>
        <div class="group">
          <b> Inside Engine Deck   </b>
          <input type="checkbox" required>
        </div>
        <div class="group">
        <ul>
          <li>Fan  </li>
          <li>Drive & air cleaner oil </li>
          <li>Radiator  </li>
          <li>Fan friction clutch </li>
          <li>Toothed coupling </li>
        </ul>
        </div>
        <div class="group">
          <b>  Fighting Compartment  
   </b>
   <input type="checkbox" required>
        </div>
        <div class="group">
        <ul>
          <li>Electrical connections </li>
          <li>Fire extinguisher system </li>
          <li>Turret accessories  </li>
          <li>Cabin Lights </li>
          <li>Electrical units </li>
        </ul>
        </div>
        <div class="group">
          <b>   Driver Compartment    
   </b>
   <input type="checkbox" required>
        </div>
        <div class="group">
        <ul>
          <li>First aid kit </li>
          <li>Air bottles </li>
          <li>Levers & pedals of control linkages </li>
          <li>Battery </li>
        </ul>
        </div>
        <div class="group">
          <b>  Engine     
   </b>
   <input type="checkbox" required>
        </div>
        <div class="group">
        <ul>
          <li>Start-up operation </li>
          <li>Assemblies and Belts </li>
          <li>Fluids/water </li>
          <li>Intake Air Heater </li>
          <li>Hoses of Brake/Clutch Systems </li>
          <li>Water Pump, Fan/Drive Belts & Pulleys </li>
          <li>Engine Mountings </li>
          <li>Engine Head Bolts </li>
          <li>Valve Mechanism & Cover Gaskets </li>
          <li>Breather Caps and Ventilators </li>
          <li>Fuel Lines </li>
          <li>Fuel/Air/Oil Filters </li>
          <li>Exhaust outlets </li>
          <li>Oil/Fuel Level </li>
        </ul>
        </div>
        <div class="group">
          <b>  Suspension System  
 
   </b>
   <input type="checkbox" required>
        </div>
        <div class="group">
        <ul>
          <li>Shock absorber, hydraulic buffer  </li>
          <li>Balance mechanism </li>
        </ul>
        </div>
        <div class="group">
          <b> Specific Periodic Checks & Services   
  
 
   </b>
   <input type="checkbox" required>
        </div>
        <div class="group">
        <ul>
          <li>Start/move within MT park  (5-10 Minutes) </li>
          <li>Road Test </li>
          <li>Tool Kit </li>
          <li>On-Board Diagnostic(OBD) </li>
          <li>Engine Compression  </li>
          <li>Lubrication </li>
          <li>Greasing </li>
          <li>Radiator flushing </li>
          <li>Fuel tank flushing  </li>
          <li>(6 Monthly - May & Sep) </li>
          <li>Hydraulic system assemblies </li>
          <li>Track tension testing </li>
          <li>Documentation </li>
        </ul>
        </div>
        <input type="submit" name="quaterly" value="Update">
      </form>



<?php
}if ($_GET['vehicle']=='C_vehicle' && $_GET['check']=='annually') {
  # code...

?>


      <form action="update.php" method="post">
        <div class="group">
          <b>Type of Vehicle</b>
          <input type="text" name="BAno" value="<?php echo $_GET['vehicle'] ?>">
        </div>
        <div class="group">
          <b>BA No</b>
          <input type="text" value="<?php echo $_GET['BAno'] ?>">
        </div>

        <div class="group">
          <b>Annual check date</b>
          <input type="date" name="annual_check_date" value="">
        </div>
        <div class="group">
          <b>Annual due date</b>
          <input type="date" name="annual_due_date" value="">
        </div>
        <div class="group">
          <b> Exterior </b>
          <input type="checkbox" required>
        </div>
        <div class="group">
        <ul>
          <li>External body </li>
          <li>Hatches & nuts </li>
          <li>Additionally installed equipment </li>
          <li>Head Light, Indicator, Stop Light etc. </li>
          <li>Door, Cupola etc. </li>
        </ul>
        </div>
        <div class="group">
          <b>  Tracks  
 </b>
 <input type="checkbox" required>
        </div>
        <div class="group">
        <ul>
          <li>Shock absorbers  </li>
          <li>Track pins </li>
          <li>Track tensioner & road wheels </li>
        </ul>
        </div>
        <div class="group">
          <b> Inside Engine Deck   </b>
          <input type="checkbox" required>
        </div>
        <div class="group">
        <ul>
          <li>Fan  </li>
          <li>Drive & air cleaner oil </li>
          <li>Radiator  </li>
          <li>Fan friction clutch </li>
          <li>Toothed coupling </li>
        </ul>
        </div>
        <div class="group">
          <b>  Fighting Compartment  
   </b>
   <input type="checkbox" required>
        </div>
        <div class="group">
        <ul>
          <li>Electrical connections </li>
          <li>Fire extinguisher system </li>
          <li>Turret accessories  </li>
          <li>Cabin Lights </li>
          <li>Electrical units </li>
        </ul>
        </div>
        <div class="group">
          <b>   Driver Compartment    
   </b>
   <input type="checkbox" required>
        </div>
        <div class="group">
        <ul>
          <li>First aid kit </li>
          <li>Air bottles </li>
          <li>Levers & pedals of control linkages </li>
          <li>Battery </li>
        </ul>
        </div>
        <div class="group">
          <b>  Engine     
   </b>
   <input type="checkbox" required>
        </div>
        <div class="group">
        <ul>
          <li>Start-up operation </li>
          <li>Assemblies and Belts </li>
          <li>Fluids/water </li>
          <li>Intake Air Heater </li>
          <li>Hoses of Brake/Clutch Systems </li>
          <li>Water Pump, Fan/Drive Belts & Pulleys </li>
          <li>Engine Mountings </li>
          <li>Engine Head Bolts </li>
          <li>Valve Mechanism & Cover Gaskets </li>
          <li>Breather Caps and Ventilators </li>
          <li>Fuel Lines </li>
          <li>Fuel/Air/Oil Filters </li>
          <li>Exhaust outlets </li>
          <li>Oil/Fuel Level </li>
        </ul>
        </div>
        <div class="group">
          <b>  Suspension System  
 
   </b>
   <input type="checkbox" required>
        </div>
        <div class="group">
        <ul>
          <li>Shock absorber, hydraulic buffer  </li>
          <li>Balance mechanism </li>
        </ul>
        </div>
        <div class="group">
          <b> Specific Periodic Checks & Services   
  
 
   </b>
   <input type="checkbox" required>
        </div>
        <div class="group">
        <ul>
          <li>Start/move within MT park  (5-10 Minutes) </li>
          <li>Road Test </li>
          <li>Tool Kit </li>
          <li>On-Board Diagnostic(OBD) </li>
          <li>Engine Compression  </li>
          <li>Lubrication </li>
          <li>Greasing </li>
          <li>Radiator flushing </li>
          <li>Fuel tank flushing  </li>
          <li>(6 Monthly - May & Sep) </li>
          <li>Hydraulic system assemblies </li>
          <li>Track tension testing </li>
          <li>Documentation </li>
        </ul>
        </div>
        <input type="submit" name="annually" value="Update">
      </form>

<?php
}
?>


    </main>
    <footer>
      <h3>Copyright © 2023 | All rights Reserved</h3>
    </footer>
  </div>
</body>
<script src="js/script.js"></script>

</html>