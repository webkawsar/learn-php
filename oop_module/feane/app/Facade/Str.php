<?php 

namespace App\Facade;



trait Str
{


  /**
   * Text transform methos
   */
  public static function hat($txt, $type = "u")
  {
    
    switch ($type) {
      case 'u':
        $trans = 'uppercase';
        break;

      case 'l':
        $trans = 'lowercase';
        break;

      case 'c':
        $trans = 'capitalize';
        break;
      
      default:
        $trans = 'capitalize';
        break;
    }

    return "<span style=\" text-transform:$trans; \">$txt</span>";

  }

  /**
   * Slug make 
   */
   public static function slug($title)
   {
     $low = strtolower($title);
     return str_replace(' ', '-', $low);
   }




  
}




