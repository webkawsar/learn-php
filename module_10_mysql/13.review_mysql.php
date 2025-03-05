<?php


// database connection
$connection = new mysqli("localhost", "root", "", "b129");


$sql = "CREATE TABLE users(
    id int(11) AUTO_INCREMENT,
    name varchar(50),
    email varchar(50),
    age int(3),
    PRIMARY KEY(id)
)";

// create table
$connection -> query($sql);



