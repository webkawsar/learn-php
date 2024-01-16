<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        // constant function
        define('name', 'Kawsar');
        // echo name; // ekhane $name lekha jabe na


        function sayHi() {
            // ekhane global lekha lagbe na
            echo "Hi " . name;
        }

        sayHi();


        // constant variable
        const NAME = "Samim";
        echo "</br> Name is " . NAME . "</br>";

        // multiple value assign in define constant
        define('person', ['Kawsar Ahmed', 'Developer', 01715103606]);
        var_dump(person);
        var_dump(person[1]);
        echo "</br> " . person[0];


    ?>
</body>
</html>