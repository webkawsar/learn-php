<?php

class Student {
    public $name;
    public $roll;

    public function getName() {
        return $this->name;
    }

    public function getRoll() {
        return $this->roll;
    }

    public function getDetails() {
        echo "<br> The name is: {$this->name} <br>";
        echo "The name is: {$this->getName()} <br>";
        echo "The roll is: {$this->roll} <br>";
        echo "The roll is: {$this->getRoll()} <br>";
    }

}

// $student = new Student;
// $student->name = "Kawsar Ahmed";
// $student->getName();

// echo "<br>";
// echo "<br>";

$student2 = new Student;
$student2->name = "Elias Hossen";
$student2->roll = "Admin";

// echo $student2->name;
echo "<br>";
// $student2->getName();
echo "<br>";
// echo $student2->roll;
echo "<br>";
// $student2->getRoll();
echo "<br>";
$student2->getDetails();




?>