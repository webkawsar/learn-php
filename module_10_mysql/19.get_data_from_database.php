<?php


    // database connection
    $connection = new mysqli("localhost", "root", "", "b129");


    // delete all data from table
    // $sql = "DELETE FROM users";
    $sql = "SELECT * FROM users";

    $data = $connection -> query($sql);
    

    // fetch()
    // fetchAll()
    // fetch_array()
    // fetch_assoc()
    // fetch_object()




    
    