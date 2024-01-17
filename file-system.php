<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        // readfile can read but problem is showing length in UI
        // $message = readfile("message.txt");
        // echo $message;
        

        // first parameter file er path
        // second parameter e eta ki hobe read hobe naki wright hobe
        $message = fopen("message.tx", 'r') or die("File path is not correct");

        // first parameter e resource dite hoy
        // second parameter e length dite hoy koyta read korbe
        // echo fread($message, 12);
        // echo "</br>";


        // ekhon length dynamic korte hole 
        $file_length = filesize("message.txt");
        echo $file_length;
        echo "</br>";

        echo fread($message, $file_length);
        echo "</br>";


        // read korar pore file close kore dite hoy
        fclose($message);


    ?>
</body>
</html>