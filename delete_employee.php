<?php
include_once("config.php");

$con = mysqli_connect($host, $user, $pass, $database);

if (!$con){
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$query = "DELETE from Employees WHERE employee_id = '{$_POST["empid"]}'";

mysqli_query($con, $query);

mysqli_query($con, "COMMIT");

Header("Location: employee.php");

?>