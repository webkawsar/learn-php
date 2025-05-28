<?php

// jodi php terminal e run kori tahole <br> tag kaj korbe na tokhon PHP_EOL use korte hobe

class Dev {
    public $name = "Kawsar Ahmed";

    public function info() {
        echo "Ami Kawsar";
    }
}

class Pilot extends Dev {
    public $name = "Samim";

    public function details() {
        echo "Ami Samim";
    }
}

$kawsar = new Dev;
$kawsar->name;
echo "<br>";

$samim = new Pilot;
$samim->name;
$samim->info();



?>