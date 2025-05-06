<?php

 class A {
    public $name = "Mr. A";
    public function work() {
        echo "I am PHP Developer";
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

 // inheritance
$b = new B;
// $b->learn();
// $b->work();
$b->bypass();







?>