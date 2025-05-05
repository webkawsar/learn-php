<?php

    class Dev {

        // property
        public static $name = "Kawsar Ahmed";
        public static $email = "kawsarahmed.dev@gmail.com";

        // method
        public static function info() {
            return Dev::$name . " is a Junior Dev" . " & his email: " . self::$email;
        }
    }

    // $student = new Student();
    // echo $student->info() ."<br>";


    echo Dev::$name . "<br>";
    echo Dev::info();
?>