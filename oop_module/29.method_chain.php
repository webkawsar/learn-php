<?php

    class Student {
        private $name = "Kawsar Ahmed";
        private $age = 29;
        private $profession = "JS Developer";

        public function setName(string $name) {
            $this->name = $name;
            return $this;
        }

        public function setAge(int $age) {
            $this->age = $age;
            return $this;
        }

        public function setProfession(string $profession) {
            $this->profession = $profession;
            return $this;
        }

        public function info() {
            echo "I am $this->name and I am $this->age years old. I worked as a $this->profession";
        }
    }

    $student = new Student;
    // $student->info();

    // method chain
    $student->setName("Samim Mohammad")->setAge(30)->setProfession("Pilot")->info();







?>