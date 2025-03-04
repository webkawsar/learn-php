<?php


// database connection

// old way
// mysql_connect();
// mysql_select_db();


// modern way
// mysqli_connect(); // modern but not recommended
// new mysqli();
// new PDO();


$connection = new mysqli("localhost", "root", "");

// create database
// $connection -> query("CREATE DATABASE allowed_not_allowed");

// drop database
$connection -> query("DROP DATABASE sms_sms");


