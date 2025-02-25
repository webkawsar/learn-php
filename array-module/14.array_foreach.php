<?php

    // index array iterate
    $friends = ['Kawsar', 'Samim', 'Imran'];

    foreach($friends as $friend) {

        echo $friend;
        echo "<br />";
    }


    // associative array iterate 
    $profile = [
        "name" => "Kawsar Ahmed",
        "age" => 27,
        "profession" => "Developer"
    ];

    echo count($profile);
    echo "</br>";

    foreach($profile as $key => $value) {
        echo "profile $key = $value </br>";
    }




