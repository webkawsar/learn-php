<?php

    class Dev {

        const NAME = "Samim Mohammad";
        const EMAIL = "kawsarahmed.dev@gmail.com";


        public static function info() {
            return Dev::NAME . " is a Junior Dev" . " & his email: " . self::EMAIL;
        }
    }

    
    // constant by default static
    echo Dev::NAME . "<br>";
    echo Dev::info() . "<br>";


?>