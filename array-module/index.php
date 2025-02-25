<?php


    // array column
    $teams = array(
        array("id" => 1, "user_name" => "kawsar", 'email' => 'kawsarahmed.dev@gmail.com'),
        array("id" => 2, "user_name" => "mustakim", 'email' => 'mustakim@gmail.com'),
        array("id" => 3, "user_name" => "ramjan", 'email' => 'ramjan@gmail.com')
    );


    echo "<pre>";
    print_r($teams);
    echo "</pre>";
    echo "<br />";

    // $array – The input array (a multidimensional array).
    // $column_key – The column whose values you want to extract.
    // $index_key (optional) – If provided, the extracted values will be indexed by this column's values.
    $keys = array_column($teams, 'email');

    echo "<pre>";
    print_r($keys);
    echo "</pre>";
    echo "<br />";

    $keys = array_column($teams, 'email', 'user_name');

    echo "<pre>";
    print_r($keys);
    echo "</pre>";
    echo "<br />";


