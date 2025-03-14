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

    /***
     * file upload function
    */
    function file_upload($file, $location) {
        // file handling
        $file_name = $file['name'];
        $file_tamp_name = $file['tmp_name'];
        
        // Generate unique file name
        $date_time = date('Y-m-d_H-i-s');
        $unique_file_name = md5(rand().time()).$file_name;

        // file upload
        move_uploaded_file($file_tamp_name, $location . $unique_file_name);

        return $unique_file_name;
    }

