<?php

include_once("../../autoload.php");

// get data
$access = $_POST['access'];
$password = $_POST['password'];

$hashed_password = $hashed_password( $password, PASSWORD_DEFAULT );

connect_db()->query("SELECT * FROM users WHERE username='$access' OR email='$access' OR cell='$access' AND password='$hashed_password'");











