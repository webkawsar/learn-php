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
    // 	email varchar(100),
    // 	phone varchar(20),
    // 	age int(3),
    // 	gender varchar(10),
    // 	photo varchar(100),
    // 	location varchar(100),
    //     status varchar(20) DEFAULT 'active',
    //     created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    //     updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    // 	PRIMARY KEY(id)
    // )";


    // data insert sql
    // $sql = "";
    // $connection -> query($sql);

?>




