<?php

class User {
    public static $name = "Kawsar Ahmed";
    public static $message = "Welcome to OOP";


    public function display() {
        echo "Name is: " . User::$name . "<br>";
        echo "Name is: " . self::$message . "<br>";
    }
}

// echo "Name is: " . User::$name . "<br>";

$user = new User;
$user->display();

User::$name = "Samim Mohammed";
echo "Name is: " . User::$name . "<br>";



?>