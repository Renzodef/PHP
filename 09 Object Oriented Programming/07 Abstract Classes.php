<?php
abstract class Fruit { 
    public $color; 
    
    abstract public function eat(); 
    
    public function setColor($c) { 
        $this->color = $c; 
    } 
} 

class Apple extends Fruit {
    public function eat() {
        echo "Omnomnom";
    }
}

$obj = new Apple();
$obj->setColor("Yellow");
echo $obj->color;
echo "\n";
$obj->eat();
?>