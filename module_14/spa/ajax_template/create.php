<?php

$name = $_POST['name'];
$email = $_POST['email'];
$cell = $_POST['cell'];
$username = $_POST['username'];

$connection = new mysqli('localhost', 'root', '', 'ajax129');
$connection->query("INSERT INTO students (name, email, cell, username) VALUES ('$name','$email','$cell','$username')");
