<?php

// get data from database and show data in html

$host = 'localhost';
$username = "root";
$password = '';
$database = 'b129';

// database connection
$connection = new mysqli($host, $username, $password, $database);

// 
$sql = "SELECT * FROM users";
$data = $connection -> query($sql);

// $user_data = $data -> fetch_assoc();

// echo "<pre>";
// print_r($user_data);
// echo "</pre>";
// echo "<br />";

while($user_data = $data -> fetch_assoc()){
    echo $user_data['username'] . '<br>';
}







