<?php


// abstract class er kuno object ba instance toiri kora jay na
// extends kore use korte hoy
abstract class A {
    public function food() {
        echo "I love eat Goru";
    }

    public final function learn () {
        echo "Now i learn PHP & WOrdpress";
    }
}

// error show kore
// $a = new A;

class B extends A {

    // public function learn () {
    //     echo "Now i learn PHP & WOrdpress";
    // }
}

// $b = new B;
// $b->food();


final class c {
    public function learn() {
        echo "Now i learn PHP & WOrdpress";
    }
}

class D extends B {

}

// access kora jabe
$c = new C;
$c->learn();

// access kora jabe na
// $d = new D;
// $d->learn();


// rules
// abstract class er object/instance ber kore use kora jabe na
// abstract class extends kore use korte hobe
// final class extends kore use kora jabe na
// final class er object/instance ber kore use korte hobe
// final kuno method overrite kora jabe na



?>