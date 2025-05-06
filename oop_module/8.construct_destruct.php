<?php

    class Dev {

        public $name = "Kawsar";
        public function work() {
            return "Working in a Australian Company";
        }

        public function __construct() {
            echo "I am construct function <hr>";
        }

        public function __destruct() {
            echo "<hr> I am destruct function";
        }


    }

    // when initiate object instance then automatically called construct & destruct function
    $dev = new Dev;
    echo $dev->work();


?>