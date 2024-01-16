<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // for 
        // while
        // do while
        // for each


        // while loop
        $starting = 1;
        while ($starting <= 10) {
            echo " starting from: $starting </br>";
            $starting += 1;
        }

        echo "While loop stopped </br>";


        // do while 
        $number = 1;
        do {
            echo "This is do while loop running phase $number </br>";
            $number++;
        } while($number <= 10);


        // for loop
        $person = array('Kawsar', 'Ahmed', 'Developer', 'Dhaka');
        $person_count = count($person);

        for ($i=0; $i < $person_count; $i++) { 
            echo "Person $i = $person[$i] </br>";
        }

        // for each loop
        foreach($person as $value) {
            echo "$value </br>";
        }
        
    ?>
</body>
</html>