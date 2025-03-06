<?php


    // database connection
    $connection = new mysqli("localhost", "root", "", "b129");


    // delete all data from table
    // $sql = "DELETE FROM users";
    $sql = "SELECT * FROM users";

    $data = $connection -> query($sql);
    

    // fetch()
    // fetchAll()

    // index & associative both data return
    // fetch_array()

    // return only associative array data
    // fetch_assoc()

    // return associative array data but data can access to different way
    // fetch_object()

    // $user_data = $data -> fetch_assoc();

    // echo "<pre>";
    // print_r($user_data);
    // echo "</pre>";
    // echo "<br />";

    // $object_data = $data -> fetch_object();
    // echo $object_data -> name;


    // get all data 
    while($object_data = $data -> fetch_object()) {
        echo $object_data -> name . '<br>';
    }






    
    