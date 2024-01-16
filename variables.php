<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 

    $name = "Kawsar Ahmed";
    $age = 27;
    $profession = "Developer";

    // echo $name;
    // echo $age;
    // echo $profession;
    
    // echo "My name is $name birth is $age and my profession is $profession";

    // variable lekhar surute $ sign diye suru korte hobe
    // $sign er pore jekuno name dite hobe, but kuno reserve keyword deya jabe na
    // $sign er pore letter/_ diye suru korte hobe kuno number diye start kora jabe na,
    // duita word jukto korar jonno _ diye jukto kore dite hobe : $my_name = "Kawsar"
    // variables er majhe rakhte parbe (a-z, 0-9, _) 
    // php loosely type language

    // echo "$name $age";
    // echo $name . $age;

    // variables scope 
    // variables scope ke 3 vage vag kora hoyese
    // global, local, static


    // function 2 prokar
    // built in function like echo
    // user define function


    function sayHi() {
        // local variable
        // $name = 'Mohammad';

        // global variable use
        // global $name;
        // echo "Hi $name";

        // echo "Hi " . $GLOBALS['name'];
    }

    sayHi();

    function getPrice() {
        static $price = 100;
        echo "Price is $price";
        $price += 500;
    }

    getPrice();
    getPrice();

?>

</body>
</html>