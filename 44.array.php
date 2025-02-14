<?php


// indexed array
// associative array
// multi dimensional array



// index array
$friends = ["Kawsar", "Samim", "Imran", "Javed"];

// echo "<pre>";
// print_r($friends);
// echo "</pre>";
// echo "<br />";
// echo $friends[0];
// echo "<br />";



// associative array
$info = [
    "fullName" => "Kawsar Ahmed",
    "age" => 29,
    "profession" => "Web Developer"
];

// echo "<pre>";
// print_r($info);
// echo "</pre>";
// echo "<br />";
// echo $info["fullName"];



// multidimensional array
$office = [
    "name" => "BPP",
    "branches" => ["USA", "AU", "BD", "IND", "ARG"]
];

echo "<pre>";
print_r($office);
echo "</pre>";
echo "<br />";
echo $office["branches"][0];




