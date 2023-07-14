<?php
abstract class Animal {
    abstract public function makeSound();
}

class Dog extends Animal {
    public function makeSound() {
        return "Woof! Woof!";
    }
}

class Cat extends Animal {
    public function makeSound() {
        return "Meow! Meow!";
    }
}

$dog = new Dog();
echo $dog->makeSound();
echo "<br>";
$cat = new Cat();
echo $cat->makeSound();
echo "<br>";
?>