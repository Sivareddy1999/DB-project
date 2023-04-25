<!DOCTYPE html>
<html lang="en">
<head>
<title>Empl0yee management system</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/styes.css">
<link rel="stylesheet" href="new_styl.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
</style>
</head>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-red w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="index.html" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>
    <a href="department.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Departments</a>
    <a href="employee.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Employees</a>
    <a href="salaries.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Salaries</a>
    <a href="requests.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Time Off requests</a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="department.php" class="w3-bar-item w3-button w3-padding-large">Departments</a>
    <a href="employee.php" class="w3-bar-item w3-button w3-padding-large">Employees</a>
    <a href="salaries.php" class="w3-bar-item w3-button w3-padding-large">Salaries</a>
    <a href="requests.php" class="w3-bar-item w3-button w3-padding-large">Time Off requests</a>
  </div>
</div>

<!-- Header -->
<header class="w3-container w3-red w3-center" style="padding:128px 16px">
  <h1 class="w3-margin w3-jumbo">Off Time requests page</h1>
  <p class="w3-xlarge">Employees management system</p>
  <button class="w3-button w3-black w3-padding-large w3-large w3-margin-top">Get Started</button>
</header>





<div class="description">
    <h3>Off Time requests</h3>

    <?php

include_once("config.php");
        $query = "SELECT  E.employee_id, E.first_name, E.last_name, O.start_date, O.end_date, O.status  from Employees E left join TimeOffRequests O on 
        O.employee_id = E.employee_id where O.status is not null";
        $result = mysqli_query($con, $query); ?>

<table id="tableres">
  <tr>
    <th>Employee ID</th>
    <th>Employee Name</th>
    <th>Start Date</th>
    <th>End Date</th>
    <th>Status</th>
    <th>Change Status</th>
    
  </tr>
  <?php
        while ($row = mysqli_fetch_assoc($result)){ ?>
            <tr>
    <td><?php echo $row["employee_id"]?></td>
    <td><?php echo $row["first_name"] . " " . $row["last_name"] ?></td>
    <td><?php echo $row["start_date"]?></td>
    <td><?php echo $row["end_date"]?></td>
    <td><?php echo $row["status"]?></td>        
    <td><a href="change_status_form.php?id=<?php echo $row["employee_id"]?>">change</a> </td> 
  </tr>
        <?php }
?>        
    
</div>




<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

</body>
</html>
