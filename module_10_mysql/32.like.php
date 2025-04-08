<?php

// config
$host = 'localhost';
$username = "root";
$password = '';
$database = 'b129';

// database connection
$connection = new mysqli($host, $username, $password, $database);

// sql query

// k diye suru joto username pabe dekhabe
// $sql = "SELECT * FROM users WHERE username LIKE 'k%'";

// first character pore second character a diye suru sob dekhabe
// $sql = "SELECT * FROM users WHERE username LIKE '_a%'";

// third character m diye suru sob result dekhabe
// $sql = "SELECT * FROM users WHERE username LIKE '__m%'";

// jar jar namer maje jekuno jaygay a thakle result e dekhabe
$sql = "SELECT * FROM users WHERE username LIKE '%a%'";

$data = $connection -> query($sql);

while ($results = $data -> fetch_assoc()) {
    echo "<pre>";
    print_r($results);
    echo "</pre>";
}