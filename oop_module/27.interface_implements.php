<?php

interface StudentMarkup {

    public function dev();
    public function info($name, $age=null, $job=null);
}


class Student implements StudentMarkup {

    public function dev(){
        echo "Dev";
    }

    public function info($name, $age=null, $job=null) {

    }
}

$student = new Student;


?>