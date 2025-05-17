<?php
// namespace
namespace App\Controllers;

use App\Support\Database;


class Menu extends Database
{

  public function getAll()
  {
    return $this->find("menus");
  }



}

?>