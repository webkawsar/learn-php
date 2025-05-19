<?php 

namespace App\Facade;


trait HASH
{

  public static function make_hash_password($password)
  {
    return password_hash($password, PASSWORD_DEFAULT);
  }

  
}

