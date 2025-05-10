<?php

    // array_keys diye associative array er keygulo dora jabe
    // 

    function create(string $table, array $data) {

        // get column name
        $arr_keys = array_keys($data);
        $column_name = implode(",", $arr_keys);

        // get column values
        $arr_values = array_values($data);
        $values = "'" . implode("', '", $arr_values) . "'";
        
        echo "INSERT INTO users($column_name) VALUES($values)";

    }


    create("users", [
        "name" => "Kawsar Ahmed",
        "email" => "webkawsar@gmail.com",
        "phone" => "01715103606",
        "username" => "webkawsar",
    ])


?>