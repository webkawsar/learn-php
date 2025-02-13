<?php


function calculateAge(str $name, int $birthYear, $currentYear = 2025) {
    $age = $currentYear - $birthYear;
    echo "Hi $name, your age is $age";
}

calculateAge("Kawsar", '1995');


