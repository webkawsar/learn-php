<?php

    $fruits = ['Apple', "Banana", "Orange", "Pineapple", "Mango", "Cherry"];

    // return sliced array and but not modify main array
    // $sliced_array = array_slice($fruits, 2, 2);

    // echo "<pre>";
    // print_r($sliced_array);
    // echo "</pre>";
    // echo "<br />";

    // echo "<pre>";
    // print_r($fruits);
    // echo "</pre>";
    // echo "<br />";


    // return sliced array and modify main array
    $spliced_array = array_splice($fruits, 2, 2);

    echo "<pre>";
    print_r($spliced_array);
    echo "</pre>";
    echo "<br />";

    echo "<pre>";
    print_r($fruits);
    echo "</pre>";
    echo "<br />";





