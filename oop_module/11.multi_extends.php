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

    public function C_method() {
        echo "It's from C";
    }
 }

 // inheritance
// $b = new B;
// $b->learn();
// $b->work();
// $b->bypass();

$c = new C;
// $c-> C_method();
// $c-> learn();
// $c-> bypass();
// $c-> food();
$c-> work();
// $c-> nai();



?>