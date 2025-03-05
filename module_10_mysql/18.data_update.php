<?php


    // database connection
    $connection = new mysqli("localhost", "root", "", "b129");


    // delete all data from table
    // $sql = "DELETE FROM users";
    $sql = "UPDATE users SET username='samim_mohammad', email='pailot@gmail.com' WHERE id=5";

    $statement = $connection -> prepare($sql);
    $statement -> execute();
    