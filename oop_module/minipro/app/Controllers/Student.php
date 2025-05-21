<?php 

// namespace
namespace App\Controllers;

// use namespace
use App\Facade\HASH;
use App\Facade\Image;
use App\Support\Database;


class Student extends Database {
  
    use HASH;
    use Image;
    /**
     * Summary of createNewStudent
     * @param mixed $name
     * @param mixed $email
     * @param mixed $phone
     * @param mixed $photo
     */
    public function createNewStudent($name, $email, $password, $phone, $photo) {
        // at first upload file
        $file = $this -> upload_file($photo, "uploads/");

        return $this -> create("students", [
            "name" => $name,
            "email" => $email,
            "password" => HASH::make_hash_password($password),
            "phone" => $phone,
            "photo" => $file['file_name']
        ]);
    }

    /**
     * Get All Students
     */
    public function allStudents($table) {
        return parent::find($table);
    }



    public function deleteStudent($id) {
        parent::deleteById("students", $id);
    }

    public function showStudent($id) {
        return $this->findById("students", $id);
    }

    public function updateStudentData($id, $name, $email, $phone, $new_photo, $old_photo) {
        if(empty($new_photo['name'])) {
            $photo_name = $old_photo;
        } else {
            $file = $this -> upload_file($new_photo, "uploads/");
            $photo_name = $file['file_name'];
            unlink("uploads/".$old_photo);
        }

        return $this -> updateById("students", $id, [
            "name" => $name,
            "email" => $email,
            "phone" => $phone,
            "photo" => $photo_name
        ]);
    }


}

