<?php

spl_autoload_register(function($class_name){
    include_once $class_name.'.php';
});

use App\Controllers\Student;
use App\Controllers\Users;

$student = new Student;
$user - new User;


?>