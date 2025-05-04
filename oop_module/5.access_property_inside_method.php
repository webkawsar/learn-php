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
            return "I am a " . $this -> name . " & i am a " . $this -> profession;
        }

        public function dev() {
            return $this -> info() . " with Dev info";
        }
    }


    // object initiate
    $student = new Student();
    
    echo $student->info() ."<br>";
    echo $student->dev() ."<br>";
?>