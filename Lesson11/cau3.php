<?php
abstract class Employee {
    protected $name;
    protected $salary;

    abstract public function getInformation();
}

class Manager extends Employee {
    public function __construct($name, $salary) {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function getInformation() {
        return "Manager: " . $this->name . ", Salary: $" . $this->salary;
    }
}

class Staff extends Employee {
    public function __construct($name, $salary) {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function getInformation() {
        return "Staff: " . $this->name . ", Salary: $" . $this->salary;
    }
}

$manager = new Manager("John Doe", 5000);
echo $manager->getInformation();
echo "<br>";

$staff = new Staff("Jane Smith", 3000);
echo $staff->getInformation(); 
echo "<br>";
?>