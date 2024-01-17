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
        // 2ta indexed array ke associative array te transform kora jay
        $ids = array(1, 2, 3);
        $user_name = array('kawsar', 'samim', 'imran');
        $combined_array = array_combine($user_name, $ids);

        print_r($combined_array);


    ?>
</body>
</html>