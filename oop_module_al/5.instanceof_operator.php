<?php

class A {
    public $name = "Kawsar Ahmed";
}

class B {
    public $name = "Samim Ahmed";
}

$a = new A;
$b = new B;

var_dump($a instanceof A); // true
echo "<br>";
var_dump($a instanceof B); // false



?>