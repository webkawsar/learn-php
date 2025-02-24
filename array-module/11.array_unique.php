<?php


    $fruits = ['Apple', "Banana", "Orange", "Apple", "Orange"];

    echo "<pre>";
    print_r($fruits);
    echo "</pre>";
    echo "<br />";

    // return unique array but not modify main array
    $unique_arr = array_unique($fruits);

    echo "<pre>";
    print_r($unique_arr);
    echo "</pre>";
    echo "<br />";

    echo "<pre>";
    print_r($fruits);
    echo "</pre>";
    echo "<br />";




