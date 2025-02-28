<?php

    // difference between two array by keys
    // compare based on first array
    $array1 = array("a" => 10, "b" => 20, "c" => 30, 'd' => 30, 'e' => 50);
    $array2 = array('a' => 10, "b" => 20, "c" => 30, 'd' => 40, 'f' => 50);

    $new_diff_array = array_diff_key($array1, $array2);

    echo "<pre>";
    print_r($new_diff_array);
    echo "</pre>";
    echo "<br />";


