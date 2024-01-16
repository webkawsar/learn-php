<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $name = "Kawsar AHmed";
        $salary = 600;
        $profession = "Developer";

        // echo $name.$salary.$profession;

        $person = array('Samim Mohammad', 15000, "Pilot");
        // var_dump($person);

        // array er vitore coma separate kore rakhte hobe


        // null o hochhe ek dorer data type
        // resource o ek dorer data type jekhane onek gulo reference thake
        // like: database


        // array
        // indexed array
        // associative array
        // multi dimensional array


        // // indexed array
        $teams = array("Samim", "Kawsar", "Mustakim", "Ruhi");
        var_dump($teams);
        echo "</br>";

        print_r($teams);
        echo "</br>";

        $length = count($teams);
        echo $length;
        echo "</br>";

        foreach($teams as $name) {
            echo "Team member: ".$name."</br>";
        }


        // associative array
        $profile = array(
            "name" => "Kawsar Ahmed",
            "age" => 27,
            "profession" => "Developer"
        );
        var_dump($profile);
        echo "</br>";

        print_r($profile);
        echo "</br>";

        $length = count($profile);
        echo $length;
        echo "</br>";

        foreach($profile as $key => $value) {
            echo "profile $key = $value </br>";
        }



        // multi dimensional array
        $man = array("name" => "Sami", 
                "address" => array(
                    "dist" => 'Jhenaidah'
                ));

        echo $man['address']['dist'];

    ?>
</body>
</html>