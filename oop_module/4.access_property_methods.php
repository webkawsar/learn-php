<?php


    // class and object


    // class declare
    // access level -> public, private, protected
    class Student {

        // property
        public $name = "Kawsar Ahmed";
        public $age = 29;
        public $profession = "Web Developer";

        // method
        public function info() {
            return "I am a Dev";
        }
    }


    // object initiate
    $student = new Student();
    echo $student-> name . "<br>";
    echo $student-> age . "<br>";
    echo $student->profession ."<br>";
    echo $student->info() ."<br>";
?>