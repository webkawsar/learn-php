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

