<?php

    $profile = array( 
        "name" => "Kawsar Ahmed", 
        "profession" => "Developer", 
        "Age" => 29,
        "salary" => 600,
        "Device" => "Laptop",
        "age" => 29,
        "last_name" => "Kawsar Ahmed"
    );
   
    echo "<pre>";
    print_r($profile);
    echo "</pre>";
    echo "<br />";


    // array count values
    // we get how many times same values are exist in array
    $values = array_count_values($profile);

    echo "<pre>";
    print_r($values);
    echo "</pre>";
    echo "<br />";


