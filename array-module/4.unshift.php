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

// array unshift added a element to first in the array and return count of array. Modify main array
echo array_unshift($friends, 'Optimistic');

echo "<pre>";
print_r($friends);
echo "</pre>";
echo "<br />";


