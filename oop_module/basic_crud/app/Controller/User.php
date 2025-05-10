<?php 


/**
 * User management system 
 */
class User extends Database {

  /**
   * * User create
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

   // delete user
   public function delete_user($id) {
    parent::delete("users", $id);
   }



}