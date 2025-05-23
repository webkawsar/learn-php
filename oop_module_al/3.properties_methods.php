<?php


class Foo {
    public $color;

    public function display() {
        echo "Color is: {$this->color} <br>";
    }

    public function set($color) {
        $this->color = $color;
    }


}

$foo = new Foo();
$foo->display();
$foo->set("Green");
$foo->display();



?>