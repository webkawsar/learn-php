<?php

// config
$host = 'localhost';
$username = "root";
$password = '';
$database = 'b129';

// database connection
$connection = new mysqli($host, $username, $password, $database);

// sql query
$sql = "SELECT * FROM users WHERE id BETWEEN 5 AND 20";
$data = $connection -> query($sql);
$results = $data -> fetch_assoc();


echo "<pre>";
print_r($results);
echo "</pre>";