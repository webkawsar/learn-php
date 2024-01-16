<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        echo "max is: " . max(101, 103, 105, 109) . "</br>";
        echo "min is: " . min(101, 103, 105, 109) . "</br>";


        // abs function
        $float_number = -101.49;
        echo "Absolute number is: " . abs($float_number); // return just positive value
        

        // get square root
        $number = 64;
        echo "</br> Square root is: " . sqrt($number);


        // generate random number
        echo "</br> Random number is: " . rand();
        echo "</br> Random number between user define range : " . rand(1, 10);


        // round figure number
        echo "</br> Round figure is: " . round($float_number);

        // change abs and round figure number
        echo "</br> Absolute and round figure number is: " . round(abs($float_number));

    ?>
</body>
</html>