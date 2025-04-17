<?php

$name = "Kawsar Ahmed";
$age = 29;
$job = "Developer";

session_start();

$_SESSION['name'] = $name;
$_SESSION['age'] = $age;
$_SESSION['job'] = $job;








?>