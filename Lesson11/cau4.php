<?php
abstract class Vehicle {
    abstract public function start();
}

class Car extends Vehicle {
    public function start() {
        return "Car started!";
    }
}

class Motorcycle extends Vehicle {
    public function start() {
        return "Motorcycle started!";
    }
}

$car = new Car();
echo $car->start();
echo "<br>";

$motorcycle = new Motorcycle();
echo $motorcycle->start();
echo "<br>";
?>
