<?php 


/**
 * User management system 
 */
class User extends Database {


  public function create_user($name, $email, $phone, $username) {
    parent::create("INSERT INTO users(name, email, phone, username) values('$name', '$email', '$phone', '$username')");
  }

}