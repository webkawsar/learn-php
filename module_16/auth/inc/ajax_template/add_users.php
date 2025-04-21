<?php

include "../../autoload.php";


// Get all user reg data 
$name = $_POST['name'];
$email = $_POST['email'];
$uname = $_POST['uname'];
$cell = $_POST['cell'];
$password = $_POST['pass'];

//  Make password hash 
$hash_pass = password_hash($password, PASSWORD_DEFAULT);

// Upload user photo 
$file = file_upload($_FILES['photo'], '../../photos/users/');
$file_name = $file['unique_name'];

if (empty($file['error_message'])) {

  // Send data to database 
  create('users', [
    'username' => $uname,
    'full_name' => $name,
    'email' => $email,
    'cell' => $cell,
    'password' => $hash_pass,
    'photo' => $file_name,
  ]);

} else {
  echo $file['error_message'];
}
