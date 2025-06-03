<?php

class One {
    public function display() {
        echo "This is show from One class display method <br>";
    }
}

class Two extends One {
    public function display() {
        echo "This is show from Two class display method <br>";
    }
}

$two = new Two();
$two->display();



?>