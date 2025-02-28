<?php

    // array element value fil up by text
    // first parameter e index koto theke suru hobe bole dite hoy
    // second parameter e koyta element add hobe bole dite hoy
    // third parameter e element ki diye fill up hobe seta dite hoy
    // syntax: array_fill(startIndex, how many element will be add, element text);

    $created_array_with_value = array_fill(0, 5, 'Dummy Text');
    var_dump($created_array_with_value);

    echo "<pre>";
    print_r($created_array_with_value);
    echo "</pre>";
    echo "<br />";


