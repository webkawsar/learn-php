<?php

    /** 
     * Validation message function
    */

    function show_message($type="danger", $message) {
        return "<div class='alert alert-$type' role='alert'>$message</div>";
    }

    /***
     * create user
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
     * update user
    */
    function update($table, $data, $id) {
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
    function delete_by_id($table, $id) {
        $sql = "DELETE FROM $table WHERE id=$id";
        connect_db() -> query($sql);
    }

    /***
     * file upload function
    */
    function file_upload($file, $location, array $type = ["jpg", "jpeg", "png", "gif"]) {
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


    /***
     * data checking in database
    */

    function data_check($table, $column, $data) {
        
        $user_data = connect_db() -> query("SELECT $column FROM $table WHERE $column='$data'");
        $count = $user_data -> num_rows;
        
        return $count > 0 ? true : false;
    }


    // old function for data recover
    function old($name) {
        if(isset($_POST[$name])) {
            echo $_POST[$name];
        }
    }


    // login user info
    function logged_in_user($user_id) {
        return get_by_id("users", $user_id);
    }