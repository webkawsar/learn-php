<?php


class Foo {
    public $color;

    public function display() {
        echo "Welcome to Bangladesh";
    }

    public function getColor() {
        echo "Color is {$this->color}";
    }
}

$foo = new Foo();
$foo->color = "Red";
// echo $foo->color;


$foo->getColor();

?>