<?php

require_once 'Employee.php';


try {
    $employee = new Employee("Masud Rana", "Laravel Developer", 25000);

    // show
    echo "Employee Name: " . $employee->getName() . "\n";
    echo "Position: " . $employee->getPosition() . "\n";
    echo "Salary: $" . $employee->getSalary() . "\n";

    // Update salary 
    $employee->setSalary(30000);
    echo "Updated Salary: $" . $employee->getSalary() . "\n";

} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

