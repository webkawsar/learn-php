<?php

    $fruits = ['Apple', "Banana", "Orange", "Pineapple", "Mango", "Cherry"];

    echo "<pre>";
    print_r($fruits);
    echo "</pre>";
    echo "<br />";

    // return sliced array but not modify main array
    $sliced_array = array_slice($fruits, 2, 2);

    echo "<pre>";
    print_r($sliced_array);
    echo "</pre>";
    echo "<br />";

    echo "<pre>";
    print_r($fruits);
    echo "</pre>";
    echo "<br />";



