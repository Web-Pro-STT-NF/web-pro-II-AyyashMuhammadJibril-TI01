<?php

use Fruit as GlobalFruit;

class Fruity {
    public $name;
    public $color;

    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }
    public function intro() {
        echo "This fruit is {$this->name} and the color is {$this->color}.";
    }
}

// Strawberry is inherited from Fruit
class Strawberry extends Fruity {
    public function message() {
        echo "Am i a fruit or a berry?";
    }
}

$strawberry = new Strawberry("Strawberry", "Red");
$strawberry->message();
$strawberry->intro();