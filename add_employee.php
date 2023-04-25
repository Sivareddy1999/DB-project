<?php
include_once("config.php");

$query_emp = "SELECT MAX(employee_id) as employee_id from Employees";

$res = mysqli_query($con, $query_emp);
while ($row = mysqli_fetch_assoc($res)){
    echo "{$row['employee_id']}";

    $new_employee_id = $row["employee_id"] + 1;
}



$query = "INSERT into Employees(employee_id, first_name, last_name, email_address, phone_number, hire_date) 
VALUES('{$new_employee_id}', '{$_POST["first_name"]}', '{$_POST["last_name"]}', '{$_POST["email_address"]}', 
'{$_POST["phone_number"]}', '{$_POST["hire_date"]}')";

mysqli_query($con, $query);

mysqli_query($con, "COMMIT");

$query2 = "SELECT MAX(salary_id) as salary_id from Salaries";

$res2 = mysqli_query($con, $query2);
while ($row2 = mysqli_fetch_assoc($res2))
{
    echo $row2["salary_id"];
    $new_salary_id = $row2["salary_id"] + 1;
    
}



$query_sal = "INSERT INTO Salaries(salary_id, employee_id, salary_amount, effective_date)
VALUES ('{$new_salary_id}', '{$new_employee_id}', '{$_POST["salary"]}', '{$_POST["hire_date"]}')";

mysqli_query($con, $query_sal);

mysqli_query($con, "COMMIT");
Header("Location: employee.php");

?>