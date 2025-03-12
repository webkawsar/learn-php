<?php

    /**
     * database connection
     */
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "php_crud";

    function connect_db() {
        global $host, $user, $password, $database;
        return $connection = new mysqli($host, $user, $password, $database);
    }
    

    // create table
    // $sql = "CREATE TABLE users(
    // 	id int(11) AUTO_INCREMENT,
    // 	user_name varchar(100),
    // 	full_name varchar(100),
    // 	email varchar(50),
    // 	phone varchar(20),
    // 	age int(3),
    // 	gender varchar(10),
    // 	photo varchar(255),
    // 	location varchar(100),
    // 	PRIMARY KEY(id)
    // )";


    // data insert sql
    // $sql = "";
    // $connection -> query($sql);

?>




