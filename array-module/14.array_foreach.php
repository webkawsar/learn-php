<?php

    // index array iterate
    $friends = ['Kawsar', 'Samim', 'Imran'];

    foreach($friends as $friend) {

        echo $friend;
        echo "<br />";
    }


    // associative array iterate but cannot get key, just get value only
    $profile = [
        "name" => "Kawsar Ahmed",
        "age" => 27,
        "profession" => "Developer"
    ];

    foreach($profile as $key) {

        echo "Key: $key";
        echo "<br />";
    }






