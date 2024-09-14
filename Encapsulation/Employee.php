<?php

class Employee {
    
    private $name;
    private $position;
    private $salary;

   
    public function __construct($name, $position, $salary) {
        $this->name = $name;
        $this->position = $position;
        $this->setSalary($salary);
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getPosition() {
        return $this->position;
    }

    public function setPosition($position) {
        $this->position = $position;
    }

    public function getSalary() {
        return $this->salary;
    }

    public function setSalary($salary) {
        if ($salary > 0) {
            $this->salary = $salary;
        } else {
            throw new Exception("Salary must be positive.");
        }
    }
}
