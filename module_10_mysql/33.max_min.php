<?php

// config
$host = 'localhost';
$username = "root";
$password = '';
$database = 'b129';

// database connection
$connection = new mysqli($host, $username, $password, $database);

// sql query
$sql = "SELECT MIN(id) FROM users";

// max
$sql = "SELECT MAX(id) FROM users";

// sum
$sql = "SELECT SUM(id) as total FROM users";

// avg
$sql = "SELECT AVG(id) as average FROM users";

// count
$sql = "SELECT COUNT(id) as count FROM users";


$data = $connection -> query($sql);
$results = $data -> fetch_assoc();


echo "<pre>";
print_r($results);
echo "</pre>";