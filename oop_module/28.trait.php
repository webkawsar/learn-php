<?php

trait Dev {

    public function food(){
        echo "Dev ra khali khay";
    }

    public function tour() {
        echo 'Dev der khali tour dite vala lage';
    }
}

trait Help {
    public function guide() {
        echo "Dev ra free te Youtube e guide kortese";
    }
}

class A {

    public function one() {
        echo "This is from A class and One method";
    }
}

class B {

    public function two() {
        echo "This is from B class and two method";
    }
}


class C extends B {
    
    use Dev;
    use Help;


    public function three() {
        echo "This is from C class and three method";
    }
}

$c = new C;
// $c->three();
// $c->two();
// $c->one();
// $c->food();
// $c->tour();
$c->guide();






?>
