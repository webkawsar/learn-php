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
$file = move($_FILES['photo'], '../../photos/users/');

$file_name = $file['unique_name'];

if (empty($file['err_msg'])) {
  // Send data to database 
  create("INSERT INTO users (name, email, cell, username, password, photo ) VALUES ('$name','$email','$cell','$uname','$hash_pass', '$file_name')");
  echo "User registration successful";
} else {
  echo $file['err_msg'];
}
