<?php 

namespace App\Controllers;

use App\Facade\Str;
use App\Facade\HASH;
use App\Facade\Image;



class Staff 
{

  use Image;


  public function amni($data)
  {

    $this -> move($data, 'photos/');


  }






}

