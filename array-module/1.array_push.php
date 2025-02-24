<?php

// array
// index array
// associative array
// multidimensional array


$friends = ["Kawsar", "Samim", "Imran", "Javed"];

echo "<pre>";
print_r($friends);
echo "</pre>";
echo "<br />";

// array push return count of array length and modify main array
echo array_push($friends, "Mizan");

echo "<pre>";
print_r($friends);
echo "</pre>";
echo "<br />";


