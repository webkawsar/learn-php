<?php

$name = "Kawsar Ahmed";
$age = 29;
$profession = "Developer";

$data = [
    "name"=> "Kawsar Ahmed",
    "age"=> $age,
    "profession"=> $profession
];


$json_data = json_encode($data);
setcookie("auth", $json_data, time() + $age);

?>