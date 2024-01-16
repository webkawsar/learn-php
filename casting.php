<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $price = 101.50;
        // echo (int)$price;

        // $integer_number = (int)$price;
        // echo "Integer is $integer_number </br>";
        // var_dump($integer_number);


        // string to integer
        $text = "13579.10150";
        // echo $text;
        var_dump($text);
        var_dump(is_int($text));

        echo "</br>";
        $string_to_int = (int)$text;
        var_dump($string_to_int);
        var_dump(is_int($string_to_int));

    ?>
</body>
</html>