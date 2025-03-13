<?php

    /** 
     * Validation message function
    */

    function show_message($type="danger", $message) {
        return "<div class='alert alert-$type' role='alert'>$message</div>";
    }


    /**
     * get all data
    */

    function get_all($table, $order = 'DESC') {
        $sql = "SELECT * FROM $table ORDER BY id $order";
        return $users = connect_db() -> query($sql);
    }

