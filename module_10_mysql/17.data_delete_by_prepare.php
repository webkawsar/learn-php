<?php


    // database connection
    $connection = new mysqli("localhost", "root", "", "b129");


    // delete all data from table
    // $sql = "DELETE FROM users";
    $sql = "DELETE FROM users WHERE id=1";

    $statement = $connection -> prepare($sql);
    $statement -> execute();
    