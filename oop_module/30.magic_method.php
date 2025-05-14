<?php

// magic method __ diye start hoy

class A {
    public $name = "Kawsar Ahmed";
    public $age = 29;
    public $profession = "JS Developer";
    private $salary = 10;


    // jodi kuno property class er maje na thake tokhon get magic method call hoy.
    public function __get($property) {
        echo $property . " property doesn't exist in class";
    }

    // set magic method diye jekuno property er value set kora jabe
    public function __set($property, $value) {

    }

    // call diye kuno method exist na korle seta dora jay
    public function __call($method, $arguments) {

    }


}

$a = new A;
// echo $a->name;

// get
// $a->food;

// set
// $a->salary = 100;
// echo $a->salary;

// call
$a->info();



?>