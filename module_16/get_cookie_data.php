<?php


$auth = $_COOKIE['auth'];
echo $auth;
echo "<br>";


$decoded_data = json_decode($auth);
echo $decoded_data-> name . '<br>';
echo $decoded_data-> age . '<br>';
echo $decoded_data-> profession . '<br>';











