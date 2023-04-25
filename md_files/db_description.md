Description of the database is as follows

The database has 4 tables that are described as follows along with their dependancies.
Table 1: Employees

employee_id (primary key)
first_name
last_name
email_address
phone_number
hire_date
Functional dependencies:

employee_id -> first_name, last_name, email_address, phone_number, hire_date
Foreign key policy:

ON DELETE CASCADE: When a department is deleted, all employees in that department are also deleted.
Table 2: Departments

department_id (primary key)
department_name
manager_id (foreign key to Employees)
Functional dependencies:

department_id -> department_name, manager_id
Foreign key policy:

ON DELETE SET NULL: When a manager is deleted, the manager_id field in the corresponding department record is set to NULL.
Table 3: Salaries

salary_id (primary key)
employee_id (foreign key to Employees)
salary_amount
effective_date
Functional dependencies:

salary_id -> employee_id, salary_amount, effective_date
employee_id, effective_date -> salary_amount
Foreign key policy:

ON DELETE CASCADE: When an employee is deleted, all salary records for that employee are also deleted.
Table 4: Time Off Requests

request_id (primary key)
employee_id (foreign key to Employees)
start_date
end_date
status
Functional dependencies:

request_id -> employee_id, start_date, end_date, status
Foreign key policy:

ON DELETE CASCADE: When an employee is deleted, all time off requests for that employee are also deleted.