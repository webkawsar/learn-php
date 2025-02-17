<?php

    $name = "Kawsar Ahmed";
    echo md5($name);
    echo "<br />";


    // hashed password
    $password = '123456';
    echo password_hash($password, PASSWORD_DEFAULT);
    echo "<br />";


    // generate random number
    echo rand(); // random number
    echo "<br />";
    echo rand(1, 6); // we can pass min, max value
    echo "<br />";


    // shuffle string
    echo $code = str_shuffle("ABCSEFGHIJKLMNOPQRSTUVWZYZ1234567890");
    echo "<hr />";

    // return a slice string
    echo substr($code, 10, 5);










