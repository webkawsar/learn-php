<?php

    
    // combine array
    // 2ta indexed array ke ekta associative array te transform kora jay
    $user_ids = array(1, 2, 3);
    $user_names = array('kawsar', 'samim', 'imran');
    $combined_array = array_combine($user_ids, $user_names);

    echo "<pre>";
    print_r($combined_array);
    echo "</pre>";
    echo "<br />";


