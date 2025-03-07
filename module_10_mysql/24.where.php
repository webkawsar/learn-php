<?php

// config
$host = 'localhost';
$username = "root";
$password = '';
$database = 'b129';

// database connection
$connection = new mysqli($host, $username, $password, $database);

// sql query
$sql = "SELECT * FROM users WHERE email='pailot@gmail.com'";
$data = $connection -> query($sql);

// gel all data by looping
while($user_data = $data -> fetch_assoc()){
    echo $user_data['username'] . '<br>';
}


