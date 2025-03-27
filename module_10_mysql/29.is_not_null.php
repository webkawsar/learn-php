<?php

// config
$host = 'localhost';
$username = "root";
$password = '';
$database = 'b129';

// database connection
$connection = new mysqli($host, $username, $password, $database);

// sql query
$sql = "SELECT * FROM users WHERE updated_at IS NOT NULL";
$data = $connection -> query($sql);

echo "<pre>";
print_r($data);
echo "</pre>";
