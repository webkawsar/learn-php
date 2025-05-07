<?php

 class A {
    public $name = "Mr. A";
    public function work() {
        echo "I am a PHP Developer";
    }

    public function food() {
        echo "I love eat Goru";
    }
 }

 class B extends A {
    public $second_name = "Mr. B";
    public function learn() {
        echo "I want to learn PHP & Wordpress";
    }

    // parent class er property & method access
    public function bypass() {
        // echo $this -> food();
        echo parent::food();
    }
 }

 class C extends B {

    public function learn() {
        echo "I want to learn Laravel";
    }

    public function C_method() {
        echo "It's from C";
    }
 }



$c = new C;
$c->learn();

// inheritance
// prothome nijer class er maje kujbe. kuje na pele er uporer class a jabe. ei class e na pele er uporer class e jabe
// kuno method nijer class er maje ase abar parent class er maje o ase tahole nijer class er method ke priority besi dibe.

?>