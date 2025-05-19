<?php

namespace App\Facade;


trait Image
{


  /**
   * Image uploading 
   */
  public function upload_file($file_info, $path = '/')
  {

    $file_name = $file_info['name'];
    $file_tmp_name = $file_info['tmp_name'];
    $unique_name = $this->uniqueName($file_name);

    // move file to location
    move_uploaded_file($file_tmp_name, $path . $unique_name);
    return [

      'file_name' => $unique_name

    ];


  }


  /**
   * Unique name generate
   */

  public function uniqueName($file_name)
  {
    $file_arr = explode('.', $file_name);
    $file_extension = end($file_arr);
    return md5(time() . rand()) . '.' . strtolower($file_extension);
  }




}

