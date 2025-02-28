<?php

    // difference between two array by values
    // first array te er sathe jodi second array na mile taholei shudu matro difference asbe
    // first array er value er sathei shudu difference kujar try kore, key ke ignore kore jay
    $array1 = array("a" => 10, "b" => 20, "c" => 30, 'z' => 40, 'e' => 50);
    $array2 = array('a' => 10, "b" => 20, "c" => 30, 'd' => 40);

    $new_diff_array = array_diff($array1, $array2);
    echo "<pre>";
    print_r($new_diff_array);
    echo "</pre>";
    echo "<br />";


