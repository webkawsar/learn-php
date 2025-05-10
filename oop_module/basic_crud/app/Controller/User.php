<?php 


/**
 * User management system 
 */
class User extends Database {

  /**
   * * User create
   * @param mixed $name
   * @param mixed $email
   * @param mixed $phone
   * @param mixed $username
   * @return void
   */
  public function create_user($name, $email, $phone, $username) {
    parent::create("INSERT INTO users(name, email, phone, username) values('$name', '$email', '$phone', '$username')");
  }

  /***
   * Get all user
   */

   public function get_users($table) {
    return parent::all($table);
   }



}