<?php

    // associative array
    $profile = array( 
        "name" => "Kawsar Ahmed", 
        "profession" => "Developer", 
        "age" => 29,
        "salary" => 600,
        "device" => "Laptop"
    );

    echo "<pre>";
    print_r($profile);
    echo "</pre>";
    echo "<br />";

    // sorted array by ascending order and modify main array
    asort($profile);

    echo "<pre>";
    print_r($profile);
    echo "</pre>";
    echo "<br />";
    


    // sorted array by descending order and modify main array
    arsort($profile);

    echo "<pre>";
    print_r($profile);
    echo "</pre>";
    echo "<br />";



    // sorted array key in ascending order and modify main array
    ksort($profile) ;

    echo "<pre>";
    print_r($profile);
    echo "</pre>";
    echo "<br />";
    

    // sorted array key in descending order and modify main array
    krsort($profile);

    echo "<pre>";
    print_r($profile);
    echo "</pre>";
    echo "<br />";



