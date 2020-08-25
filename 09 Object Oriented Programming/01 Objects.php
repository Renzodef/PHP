<?php
class Person {
    public $age;
    function speak() {
        echo "Hi!";
    }
}
$p1 = new Person(); 
$p1->age = 23;
echo $p1->age; 
echo "\n";
$p1->speak();
?>