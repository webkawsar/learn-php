<?php 


/**
 * User management system 
 */
class User extends Database {


  /**
   * User add to database
   */
  public function userTomiJao($name, $email, $cell, $uname) 
  {
    
    parent::create("INSERT INTO users (name, email, cell, username) VALUES ('$name','$email','$cell','$uname')");

  }

  /**
   * All users 
   */
  public function sobUserCholeAso()
  {

    return parent::all('users');

  }

  /**
   * Delete User account
   */

   public function userDhonso($id)
   {
      parent::delete('users', $id);
   }





}