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

// array pop return removed last element of array and modify main array
echo array_pop($friends);

echo "<pre>";
print_r($friends);
echo "</pre>";
echo "<br />";


