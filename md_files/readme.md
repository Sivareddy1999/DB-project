The system described in this file is an employee management system. 

The system enables several activities with te employees tht enable CRUD operations
in the employee_management_database.

Some of the CRUD statements are done using the system itself via its GUI.

Other CRUD statements are demonstrated through the crud_sql.md file.
the db_description.md file contains the description of the database and its functional dependencies to show that all tables are in 3NF form.

The system has one landing page which is the index.html

The configuration of the database is contained in the config.php file.

The UI enalbles the addition of employees and departments records to the respective tables via add_employee.html, add_employee.php for employees and add_departments.html, add_department.php for departments.

It is also possible to change the status of employees via the change_status.php and change_status_form.html.

All other files retrieve  all records from the database. In this files, there is usage of join statements,
sub-queries, and associative clauses. 

 The department.php displays details about all departments.

 The employee.php displays details about all employees.

 The salaries.php displays all salary data and the associative employees.

 Finally the requests.php displays information about all off-time requests done by employees. 