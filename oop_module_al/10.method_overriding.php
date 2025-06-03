<?php

class One {
    public $name = "Kawsar Ahmed";
    public function display() {
        echo "This is show from One class display method <br>";
    }
}

class Two extends One {
    public function display() {
        echo "This is show from Two class display method <br>";
        parent::display();
        $this->name = "Samim Mohammed";
        echo "Name is: {$this->name} <br>";
    }
}

$two = new Two();
$two->display();
echo $two->name;



?>