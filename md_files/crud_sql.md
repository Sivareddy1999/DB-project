CRUD queries from the database


1. Retrieve all employees who work in the 'Sales' department.

select Employees.* from Employees where employee_id in ( select employee_id from Employee_Department where department_id =  
( SELECT department_id FROM Departments WHERE department_name = 'Sales'));


2. Retrieve the average salary of all employees.
SELECT AVG(salary_amount) FROM Salaries;

3. Retrieve the total number of approved time off requests.

SELECT COUNT(*) FROM TimeOffRequests WHERE status = 'approved';

4. Retrieve the names of all employees who have requested time off between '2023-05-01' and '2023-06-01'.

SELECT first_name, last_name FROM Employees WHERE employee_id IN (
  SELECT employee_id FROM TimeOffRequests
  WHERE start_date >= '2022-05-01' AND end_date <= '2022-07-10'
);


5. Retrieve the highest paid employee's name and salary.
SELECT e.first_name, e.last_name, s.salary_amount 
FROM Employees e
JOIN Salaries s ON e.employee_id = s.employee_id
WHERE s.salary_amount = (
  SELECT MAX(salary_amount) FROM Salaries
);

6. Retrieve the departments and the total number of employees in each department.

SELECT d.department_name, COUNT(*) AS total_employees
FROM Departments d
join Employee_Department ed on d.department_id = ed.department_id
JOIN Employees e ON ed.employee_id = e.employee_id 
GROUP BY d.department_name;

7. Allow employees to update their phone numbers:

UPDATE Employees
SET phone_number = '<new phone number>'
WHERE employee_id = <employee_id>;

8. Allow managers to update the salaries of an employee:

UPDATE Salaries
SET salary_amount = <new salary>
WHERE employee_id = <employee_id>;
