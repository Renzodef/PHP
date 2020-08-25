<?php
class Dog {
    public $legs=4;
    public function display() {
        echo $this->legs;
    }
}
$d1 = new Dog();
$d1->display();

echo "\n";

$d2 = new Dog();
$d2->legs = 2;
$d2->display();
?>