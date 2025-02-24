<?php


    $fruits = ['Apple', "Banana", "Orange"];

    echo "<pre>";
    print_r($fruits);
    echo "</pre>";
    echo "<br />";

    // return reversed array but not modify main array
    $reversed_array = array_reverse($fruits);

    echo "<pre>";
    print_r($reversed_array);
    echo "</pre>";
    echo "<br />";

    echo "<pre>";
    print_r($fruits);
    echo "</pre>";
    echo "<br />";




