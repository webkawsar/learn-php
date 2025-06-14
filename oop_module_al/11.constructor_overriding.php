<?php

class User {
    public $name;
    public $address;

    public function __construct($name, $address) {
        $this->name = $name;
        $this->address = $address;
    }

    public function display() {
        echo "Name is: {$this->name} <br>";
        echo "Address is: {$this->address} <br>";
    }
}

// $user = new User("Kawsar", "Nowapara");
// $user->display();


class Student extends User {
    public $roll;

    public function __construct($name, $address, $roll) {
        // $this->name = $name;
        // $this->address = $address;

        parent::__construct($name, $address);
        $this->roll = $roll;
    }

    public function getRole() {
        echo "Role is: {$this->roll} <br>";
    }

}

// $student = new Student();
$student = new Student("John Doe", "Bidesh", "Admin");
$student->display();
$student->getRole();



?>