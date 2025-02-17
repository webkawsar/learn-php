<?php

    $text = "Hi, I am Kawsar, I am Dev, I also love Gorur Biriyani, Etai Bastob, Ha Ha";
    
    // return a array of string
    $string_array = explode(',', $text);
    
    echo "<pre>";
    print_r($string_array);
    echo "</pre>";
    echo "<br />";


    // return a string
    $text_string = implode('.', $string_array);

    echo "<pre>";
    print_r($text_string);
    echo "</pre>";
    echo "<br />";













