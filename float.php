<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $price = 101;
        // var_dump($price);


        // is_double() alias is_float()
        var_dump(is_float($price)); // return boolean(false) cause, 101 is integer
        
    ?>
</body>
</html>