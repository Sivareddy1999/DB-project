<?php
include_once("config.php");

$con = mysqli_connect($host, $user, $pass, $database);

if (!$con){
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";




$query = "INSERT into Departments(department_id, department_name, manager_id) 
VALUES('{$_POST["department_id"]}', '{$_POST["department_name"]}', '{$_POST["manager_id"]}')";

mysqli_query($con, $query);

mysqli_query($con, "COMMIT");


Header("Location: departments.php");

?>