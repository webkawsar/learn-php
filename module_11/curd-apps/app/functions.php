<?php

    /** 
     * Validation message function
    */

    function show_message($type="danger", $message) {
        return "<div class='alert alert-$type' role='alert'>$message</div>";
    }

    /***
     * create data
    */
    function create($table, $data) {
        
        // get keys only from array
        $columns = implode(', ', array_keys($data));

        // get values only from array
        $values = "'" . implode("', '", array_values($data)) . "'";
        
        $sql = "INSERT INTO $table($columns) VALUES($values)";
        connect_db() -> query($sql);
    }


    /**
     * get all data
    */
    function get_all($table, $order = 'DESC') {
        $sql = "SELECT * FROM $table ORDER BY id $order";
        return $users = connect_db() -> query($sql);
    }


    /**
     * get single by id
    */
    function get_by_id($table, $id) {
        $sql = "SELECT * FROM $table WHERE id='$id'";
        return $user = connect_db() -> query($sql);
    }


    /***
     * delete data
    */
    function delete_by_id($table, $id) {
        $sql = "DELETE FROM $table WHERE id=$id";
        connect_db() -> query($sql);
    }

    /***
     * file upload function
    */
    function file_upload($file, $location, array $type = [".jpg", ".jpeg", ".png", ".gif"]) {
        // file handling
        $file_name = $file['name'];
        $file_tamp_name = $file['tmp_name'];
        
        // Generate unique file name
        $file_array = explode(".", $file_name);
        $file_ext = end($file_array);
        $unique_file_name = md5(rand().time()).$file_name;

        $message = "";
        if(!in_array($file_ext, $type)) {
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

