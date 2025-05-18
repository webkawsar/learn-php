<?php

    $sql = "CREATE TABLE students(
        id int(11) AUTO_INCREMENT,
        name varchar(100),
        email varchar(100),
        phone varchar(20),
        photo varchar(255),
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        trash int(1) DEFAULT 0 ,
        status int(1) DEFAULT 1,
        PRIMARY KEY(id)
    )";

?>