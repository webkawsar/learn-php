<?php

class User {
    public $name = "Kawsar Ahmed";

    public function displayName() {
        echo $this->name;
    }
}

class Profession extends User {
    public $profession = "Web Developer";
}

class Savings extends Profession {
    public $savings = 10000;
}

class Expense extends Savings {
    public $expense = 2000;
}

$data = new Expense();
echo "Expense: " . $data->expense . "<br>";
echo "Savings: " . $data->savings . "<br>";
echo "Profession: " . $data->profession . "<br>";
echo "Name: " . $data->name . "<br>";






?>