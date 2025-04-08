<?php

// config
$host = 'localhost';
$username = "root";
$password = '';
$database = 'b129';

// database connection
$connection = new mysqli($host, $username, $password, $database);

// sql query
$sql = "SELECT name as dakNam, email as chiti, phone as mutoPhone, photo as chobi FROM users";
$data = $connection -> query($sql);


echo "<pre>";
print_r($data);
echo "</pre>";