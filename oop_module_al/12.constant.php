<?php

class User {
    const MESSAGE = "Welcome to User Class";
    public $name = "Kawsar Ahmed";

    public function display() {
        echo "Name is: {$this->name} <br>";

        // cannot access in this way
        // echo "Message is: {$this->MESSAGE} <br>";

        // access from this both way
        echo "Message is: " . User::MESSAGE . "<br>";
        echo "Message is: " . self::MESSAGE . "<br>";
        
    }
}

// const access from outside
// echo User::MESSAGE;

$user = new User;
$user->display();

?>