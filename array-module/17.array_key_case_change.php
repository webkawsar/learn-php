<?php

    // associative array
    $profile = array( 
        "name" => "Kawsar Ahmed", 
        "profession" => "Developer", 
        "Age" => 29,
        "salary" => 600,
        "Device" => "Laptop"
    );

    // change array all key to lowercase
    $changed_key_case = array_change_key_case($profile);

    echo "<pre>";
    print_r($changed_key_case);
    echo "</pre>";
    echo "<br />";


    // change array all key to uppercase
    $changed_upper_key_case = array_change_key_case($profile, CASE_UPPER);
    
    echo "<pre>";
    print_r($changed_upper_key_case);
    echo "</pre>";
    echo "<br />";



