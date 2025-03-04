<?php


// database connection

// old way
// mysql_connect();
// mysql_select_db();


// modern way
// mysqli_connect(); // modern but not recommended
// new mysqli();
// new PDO();


$connection = new mysqli("localhost", "root", "");




