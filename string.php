<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $first_name = "Kawsar";
        $last_name = "Ahmed";
        $profession = "Developer";
        $name = $first_name . " " . $last_name;

        // var_dump($name);

        // var_dump data type and value return kore


        // strlen function er maddome string er length pawa jay
        // echo strlen($name); 

        
        // ekta sentence e koyta word ase eta janar jonno ei function use kra hoy
        // $profile = $name . " " . $profession;
        // echo $profile;
        // echo str_word_count($profile);


        // string reverse
        // echo strrev($first_name);


        // search word position in sentence
        // first parameter e jei sentence theke kuje ber korte hobe seta dite hobe
        // second parameter e jei word kujbo seta dite hoy
        // jodi kuje pay tahole index number return korbe
        // same word multiple thakle first word er index return korbe
        // na pele kichui return korbe na

        // $bio = "Hi a Guys, I am a Developer";
        // echo strpos($bio, 'a');



        // string replace
        // str_replace('searchValue', 'replaceValue', 'sentence')

        $paragraph = "This is some dummy text";
        echo str_replace('normal', 'original', $paragraph);


    ?>
</body>
</html>