<?php

namespace App\Support;
use mysqli;


/**
 * Data management system 
 */
abstract class Database
{

    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $db = 'minipro';
    private $connection;


    /**
     * Database connection 
     */
    private function connection()
    {
        return $this->connection = new mysqli($this->host, $this->user, $this->pass, $this->db);
    }


    /**
     * Create data
     */
    protected function create(string $table, array $data)
    {

        // get keys only from array
        $columns = implode(', ', array_keys($data));

        // get values only from array
        $values = "'" . implode("', '", array_values($data)) . "'";

        $sql = "INSERT INTO $table($columns) VALUES($values)";
        $this->connection()->query($sql);
    }


    /**
     * get all data
     */
    protected function find($table, $order = 'DESC')
    {
        $sql = "SELECT * FROM $table ORDER BY id $order";
        return $this->connection()->query($sql);
    }


    /**
     * get single by id
     */
    protected function findById($table, $id)
    {
        $sql = "SELECT * FROM $table WHERE id='$id'";
        return $user = connect_db()->query($sql);
    }


    /***
     * update user
     */
    protected function updateById($table, $data, $id)
    {
        // Prepare the SET part dynamically
        $setPart = [];
        foreach ($data as $column => $value) {
            $setPart[] = "$column = '$value'";
        }
        $setClause = implode(', ', $setPart);

        // Ensure ID is properly handled
        $sql = "UPDATE $table SET $setClause WHERE id = '$id'";

        // Execute query
        return connect_db()->query($sql);
    }


    /***
     * delete data
     */
    protected function deleteById($table, $id)
    {
        $sql = "DELETE FROM $table WHERE id=$id";
        $this->connection()->query($sql);
    }

    /***
     * file upload function
     */
    protected function file_upload($file, $location, array $type = ["jpg", "jpeg", "png", "gif"])
    {
        // file handling
        $file_name = $file['name'];
        $file_tamp_name = $file['tmp_name'];

        // Generate unique file name
        $file_array = explode(".", $file_name);
        $file_ext = end($file_array);
        $unique_file_name = md5(rand() . time()) . $file_name;

        $message = "";
        if (!in_array($file_ext, $type)) {
            $message = "Invalid file format!";
        } else {
            // file upload
            move_uploaded_file($file_tamp_name, $location . $unique_file_name);
        }


        return [
            "unique_name" => $unique_file_name,
            "error_message" => $message
        ];
    }

}