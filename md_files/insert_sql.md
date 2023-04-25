USE employee_management_system;
-- Insert records into the Departments table
INSERT INTO Departments (department_id, department_name, manager_id)
VALUES (1, 'Engineering', 2),
       (2, 'Sales', 5),
       (3, 'Marketing', 4),
       (4, 'Human Resources', NULL),
       (5, 'Accounting', 1);

-- Insert records into the Employees table
INSERT INTO Employees (employee_id, first_name, last_name, email_address, phone_number, hire_date)
VALUES (1, 'John', 'Doe', 'johndoe@example.com', '555-1234', '2020-01-01'),
       (2, 'Jane', 'Doe', 'janedoe@example.com', '555-5678', '2019-05-01'),
       (3, 'Bob', 'Smith', 'bobsmith@example.com', '555-2345', '2021-03-15'),
       (4, 'Alice', 'Johnson', 'alicejohnson@example.com', '555-6789', '2022-01-01'),
       (5, 'Jim', 'Brown', 'jimbrown@example.com', '555-3456', '2020-10-01');

-- Insert records into the Employee_Department table
INSERT INTO Employee_Department (employee_id, department_id)
VALUES (1, 1),
       (2, 1),
       (3, 2),
       (4, 3),
       (5, 5);

-- Insert records into the Salaries table
INSERT INTO Salaries (salary_id, employee_id, salary_amount, effective_date)
VALUES (1, 1, 60000.00, '2022-01-01'),
       (2, 2, 75000.00, '2021-05-01'),
       (3, 3, 90000.00, '2021-06-01'),
       (4, 4, 100000.00, '2022-01-01'),
       (5, 5, 80000.00, '2021-02-01');

-- Insert records into the TimeOffRequests table
INSERT INTO TimeOffRequests (request_id, employee_id, start_date, end_date, status)
VALUES (1, 1, '2022-05-01', '2022-05-05', 'Approved'),
       (2, 2, '2022-06-15', '2022-06-20', 'Pending'),
       (3, 3, '2022-07-01', '2022-07-10', 'Approved'),
       (4, 4, '2022-08-01', '2022-08-03', 'Denied'),
       (5, 5, '2022-09-01', '2022-09-05', 'Approved');
