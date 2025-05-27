<?php

class Student {
    public $name;
    public $roll;

    function __construct($name, $roll) {
        $this->name = $name;
        $this->roll = $roll;
    }


    function __destruct() {
        echo "The work is done";
    }

}

$student = new Student("Kawsar Ahmed", "Admin");
echo $student->name;
echo "<br>";
echo $student->roll;
echo "<br>";





?>