<?php


// database connection
$connection = new mysqli("localhost", "root", "", "b129");

$sql = "INSERT INTO users(email, name, age) VALUES('Kawsar', 'kawsar@gmail.com', 29)";

// create table
$connection -> query($sql);



