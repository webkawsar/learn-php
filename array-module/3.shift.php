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

// array shift remove first element and return removed element. Modify main array
echo array_shift($friends);

echo "<pre>";
print_r($friends);
echo "</pre>";
echo "<br />";


