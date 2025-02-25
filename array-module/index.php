<?php

    // associative array
    $profile = array( 
        "name" => "Kawsar Ahmed", 
        "profession" => "Developer", 
        "Age" => 29,
        "salary" => 600,
        "Device" => "Laptop"
    );

    echo "<pre>";
    print_r($profile);
    echo "</pre>";
    echo "<br />";

    // divided array chunk by chunk but not modify main array
    $divided_array = array_chunk($profile, 2);

    echo "<pre>";
    print_r($divided_array);
    echo "</pre>";
    echo "<br />";


    echo "<pre>";
    print_r($profile);
    echo "</pre>";
    echo "<br />";




