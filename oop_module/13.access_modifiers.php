<?php

// access modifiers
class A {

    public function work() {
        echo "ami ekta chakri kori";
    }

    private function salary() {
        echo "Kawsar salary: 1, 00, 00/=";
    }

    public function kawsar_salary() {
        echo $this->salary();
    }

    protected function kawsar_age() {
        echo "Kawsar er boyos: 29";
    }
}

class B extends A {

    public function age() {
        echo $this->kawsar_age();
    }
}


$a = new A;
// public jekuno kise jekuno jayga theke access kora jabe
// $a->work();

// private jinis baire theke access kora jabe na
// $a->salary();

// public arekta method niye private jinis access kora jabe baire theke but direct access kora jabe na
// $a->kawsar_salary();

// protected jinis bahire theke access kora jabe na
// $a->kawsar_age();


$b = new B;
// cannot access private property & method from extends class
// $b->salary();
// $b->kawsar_salary();

// protected property & method access can extends class
$b->age();




// rules
// private jinis bahire theke access kora jabe na
// private jinis extends class theke access kora jabe na
// private jinis shudu nijer class er maje use kora jabe
// protected jinis bahire theke access kora jabe na
// protected jinis shudu extends class theke access kora jabe
// public jinis sob jayga theke access kora jabe



?>