<?php

  /**
   * database connection
   */

  function connect_db() {
      return $connection = new mysqli(HOST, username: USER, PASSWORD, DATABASE_NAME);
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

  // $sql = "SELECT * FROM users WHERE updated_at IS NULL";
  // $sql = "SELECT * FROM users WHERE updated_at IS NOT NULL";

  // column name alias
  // $sql = "SELECT name as dakNam, email as chiti, phone as mutoPhone, photo as chobi FROM users WHERE updated_at IS NOT NULL";







