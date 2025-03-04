<?php


// database connection

// old way
// mysql_connect();
// mysql_select_db();


// modern way
// mysqli_connect(); // modern but not recommended
// new mysqli();
// new PDO();


$connection = new mysqli("localhost", "root", "", "b129");

// create database
// $connection -> query("CREATE DATABASE b129");


// drop database
// $connection -> query("DROP DATABASE sms_sms");



// create table
// $connection -> query("CREATE TABLE users(
//     id int(11),
//     name varchar(50),
//     email varchar(50),
//     age int(3)
// )");


// drop table
$connection -> query("DROP TABLE users");

