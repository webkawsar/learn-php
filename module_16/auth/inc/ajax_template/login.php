<?php

include_once("../../autoload.php");

// get data
$access = $_POST['access'];
$password = $_POST['password'];

// make password hashed
$hashed_password = password_verify($password, PASSWORD_DEFAULT);

$results = connect_db()->query("SELECT * FROM users WHERE username='$access' OR email='$access' OR cell='$access'");

// at first checking user exist or not
if($results->num_rows === 1) {

    // checking user password correct or not
    $login_user_data = $results->fetch_object();
    if(password_verify($password, $login_user_data->password)) {
        
        header("location: ../../profile.php");
        exit;

    } else {
        echo "Invalid credentials!";
    }

} else {
    echo "Invalid credentials!";
}








