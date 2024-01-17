<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <label for="username">Username</label>
        <input type="text" name="username" id="username">

        <br>
        
        <label for="password">Password</label>
        <input type="password" name="password" id="password">

        <br>

        <input type="submit" value="Submit">
    </form>

    <?php

        if($_SERVER['REQUEST_METHOD'] == 'POST') {

            $username = $_POST['username'];
            $password = $_POST['password'];

            if(empty($username) || empty($password)) {
                echo "Please fill up form";
            } else {
                echo "username = $username, password = $password";
            }
        }

    ?>
</body>
</html>