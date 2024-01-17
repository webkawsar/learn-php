<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        // index array sorting
        // $alphabet = array('c', 'd', 'e', 'a', 'b');
        // sort($alphabet);

        // foreach($alphabet as $letter) {
        //     echo "$letter </br>";
        // }


        // reverse sort
        // $numbers = array(1, 3, 5, 4, 11, 50, 25, 500, 2500, 100);
        
        // // sort($numbers);
        // rsort($numbers);

        // foreach($numbers as $number) {
        //     echo "$number </br>";
        // }


        // associative array sorting
        // $profile = array("Name" => "Kawsar Ahmed", "profession" => "Developer", "job" => "Bekar");

        // sorted by ascending
        // asort($profile);

        // sorted by descending
        // arsort($profile);

        // sorted key in ascending
        // ksort($profile) ;

        // sorted key in descending
        // krsort($profile);

        // foreach($profile as $key => $value) {

        //     echo "$key = $value </br>";
        // }

        
        // change all key to lowercase
        // $changed_key_case = array_change_key_case($profile);

        // change all key to uppercase
        // $changed_key_case = array_change_key_case($profile, CASE_UPPER);
        
        // changing array key case
        // foreach($changed_key_case as $key => $value) {
        //     echo "$key = $value </br>";
        // }



        // array chunk
        // $divided_array = array_chunk($profile, 2);
        // var_dump($divided_array);



        // array column
        // $teams = array(
        //     array("id" => 1, "user_name" => "kawsar", 'email' => 'kawsarahmed.dev@gmail.com'),
        //     array("id" => 2, "user_name" => "mustakim", 'email' => 'mustakim@gmail.com'),
        //     array("id" => 3, "user_name" => "ramjan", 'email' => 'ramjan@gmail.com')
        // );

        // $keys = array_column($teams, 'email', 'user_name');
        // print_r($keys);



        // combine array
        // 2ta indexed array ke ekta associative array te transform kora jay
        // $ids = array(1, 2, 3);
        // $user_name = array('kawsar', 'samim', 'imran');
        // $combined_array = array_combine($user_name, $ids);

        // print_r($combined_array);



        // array count values
        // $profile = array("name" => "Kawsar Ahmed", "profession" => "Developer");
        // // print_r($profile);

        // $values = array_count_values($profile);
        // print_r($values);
        // var_dump($values);



        // difference between two array by values
        // first array te er sathe jodi second array na mile taholei shudu matro difference asbe
        // first array er value er sathei shudu difference kujar try kore, key ke ignore kore jay

        // $array1 = array("a" => 10, "b" => 20, "c" => 30, 'ffdc' => 40, 'e' => 50);
        // $array2 = array('a' => 10, "b" => 20, "c" => 30, 'd' => 40);

        // $new_diff_array = array_diff($array1, $array2);
        // var_dump($new_diff_array);



        // difference between two array by keys
        // $array1 = array("a" => 10, "b" => 20, "c" => 30, 'd' => 40, 'e' => 50);
        // $array2 = array('a' => 10, "b" => 20, "c" => 30, 'd' => 40, 'f' => 50);

        // $new_diff_array = array_diff_key($array1, $array2);
        // var_dump($new_diff_array);



        // difference between two array by keys and values
        // $array1 = array("a" => 10, "b" => 20, "c" => 30, 'd' => 40, 'e' => 50);
        // $array2 = array('a' => 10, "b" => 20, "c" => 30, 'd' => 40, 'f' => 50);

        // $new_diff_array = array_diff_assoc($array1, $array2);
        // var_dump($new_diff_array);





        // array element value fil up by text
        // first parameter e index koto theke suru hobe bole dite hoy
        // second parameter e koyta element add hobe bole dite hoy
        // third parameter e element ki diye fill up hobe seta dite hoy
        // syntax: array_fill(startIndex, how many element will be add, element text);

        // $created_array_with_value = array_fill(0, 5, 'Dummy Text');
        // var_dump($created_array_with_value);

        // echo "</br>";
        // print_r($created_array_with_value);
        // echo "</br>";

        // foreach($created_array_with_value as $key => $value) {
        //     echo "$key = $value </br>";
        // }

        // echo "Total length is: ".count($created_array_with_value);





        // array element key fil up by array
        // $array1 = array(1, 3, 5);
        // $created_array_with_key = array_fill_keys($array1, 'Dummy Text');

        // var_dump($created_array_with_key);

        // echo "</br>";
        // print_r($created_array_with_key);
        // echo "</br>";

        // foreach($created_array_with_key as $key => $value) {
        //     echo "$key = $value </br>";
        // }

        // echo "Total length is: ".count($created_array_with_key);




        // array filter method buji ni
        // video no 17




        // in array
        // $allow_format = array("jpg", "jpeg", "png", "PNG");
        
        // if(in_array("jpg", $allow_format)) {
        //     echo "Matched </br>";
        // } else {
        //     echo 'Not Matched </br>';
        // }

        // // ternary operator
        // $value = in_array('json', $allow_format) ?  "Matched" :   'Not Matched';
        // echo "value = $value";




        // 19 no vide er __FILLES__ eta buji nai



        // changed array key to value
        // $person = array("id" => 1, "username" => "kawsar", "email" => "kawsar@gmail.com");
        // print_r($person);
        // echo "</br>";

        // $changed_array = array_flip($person);
        // print_r($changed_array);



        // find match element between two arrays
        // compare only value not keys

        // $array1 = array("id" => 1, "username" => "kawsar", "email" => "kawsar.dev@gmail.com");
        // $array2 = array("id" => 1, "username" => "samim", "email" => "samim@gmail.com");
        
        // $matched_element = array_intersect($array1, $array2);
        // print_r($matched_element);




        // find match element between two arrays  when keys abd value are same
        // $array1 = array("id" => 1, "username" => "kawsar", "email" => "kawsar.dev@gmail.com");
        // $array2 = array("id" => 1, "username" => "samim", "email" => "samim@gmail.com");

        // $matched_element = array_intersect_assoc($array1, $array2);
        // print_r($matched_element);





        // find match element between two arrays  when only keys are same
        $array1 = array("id" => 1, "username" => "kawsar", "email" => "kawsar.dev@gmail.com");
        $array2 = array("id" => 10, "username" => "samim", "email" => "samim@gmail.com");

        $matched_element = array_intersect_key($array1, $array2);
        print_r($matched_element);


        // serialize, unserilize 
        // video no 22, 23 buji nai




    ?>
</body>
</html>