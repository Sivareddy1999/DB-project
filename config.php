
<?php 
$user = "root";
$host = "localhost";
$pass = "";
$database = "employee_management_system";

$con = mysqli_connect($host, $user, $pass, $database);

if (!$con){
    die("Connection failed: " . mysqli_connect_error());
}
#echo "Connected successfully";

?>