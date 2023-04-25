CREATE SCHEMA employee_management_system;

USE employee_management_system;

CREATE TABLE Departments (
  department_id INT PRIMARY KEY,
  department_name VARCHAR(50),
  manager_id INT,
  FOREIGN KEY (manager_id) REFERENCES Employees(employee_id) ON DELETE SET NULL
);

CREATE TABLE Employees (
  employee_id INT PRIMARY KEY,
  first_name VARCHAR(50),
  last_name VARCHAR(50),
  email_address VARCHAR(100),
  phone_number VARCHAR(20),
  hire_date DATE
);

CREATE TABLE Employee_Department (
  employee_id INT,
  department_id INT,
  PRIMARY KEY (employee_id, department_id),
  FOREIGN KEY (employee_id) REFERENCES Employees(employee_id) ON DELETE CASCADE,
  FOREIGN KEY (department_id) REFERENCES Departments(department_id) ON DELETE CASCADE
);

CREATE TABLE Salaries (
  salary_id INT PRIMARY KEY,
  employee_id INT,
  salary_amount DECIMAL(10,2),
  effective_date DATE,
  FOREIGN KEY (employee_id) REFERENCES Employees(employee_id) ON DELETE CASCADE
);

CREATE TABLE TimeOffRequests (
  request_id INT PRIMARY KEY,
  employee_id INT,
  start_date DATE,
  end_date DATE,
  status VARCHAR(20),
  FOREIGN KEY (employee_id) REFERENCES Employees(employee_id) ON DELETE CASCADE
);
