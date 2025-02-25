<?php

    $alphabet = array('c', 'd', 'e', 'a', 'b');
    
    echo "<pre>";
    print_r($alphabet);
    echo "</pre>";
    echo "<br />";

    
    // index array sorting by ascending and modify main array
    echo sort($alphabet);

    echo "<pre>";
    print_r($alphabet);
    echo "</pre>";
    echo "<br />";


    $numbers = array(1, 3, 5, 4, 11, 50, 25, 500, 2500, 100);

    echo "<pre>";
    print_r($numbers);
    echo "</pre>";
    echo "<br />";
    
    // index array sorting by descending and modify main array
    rsort($numbers);

    echo "<pre>";
    print_r($numbers);
    echo "</pre>";
    echo "<br />";

