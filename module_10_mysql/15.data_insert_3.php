<?php

    if(isset($_POST['submit'])) {

        // get form data 
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];


        // database connection
        $connection = new mysqli("localhost", "root", "", "b129");


        // create table
        // $sql = "CREATE TABLE users(
        //     id int(11) AUTO_INCREMENT,
        //     username varchar(50),
        //     email varchar(50),
        //     password varchar(100),
        //     PRIMARY KEY(id)
        // )";


        // insert data into table
        $sql = "INSERT INTO users(username, email, password) VALUES('$username', '$email', '$password')";
        $connection -> query($sql);

    }






?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Handling</title>
</head>
<body>
    <form action="" method="POST">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" >
        <br>

        <label for="email">Email</label>
        <input type="text" name="email" id="email" >
        <br>

        <label for="password">Password</label>
        <input type="password" name="password" id="password" >
        <br>

        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>