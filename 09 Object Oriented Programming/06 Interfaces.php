<?php
interface AnimalInterface {
    public function makeSound();
}

class Dog implements AnimalInterface {
    public function makeSound() {
        echo "Woof!\n";
    }
}
class Cat implements AnimalInterface {
    public function makeSound() {
        echo "Meow!";
    }
}

$myObj1 = new Dog();
$myObj1->makeSound();

$myObj2 = new Cat();
$myObj2->makeSound();
?>