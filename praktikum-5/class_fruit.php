<?php
class Fruit {
    public $name;
    protected $color;
    private $weight;

    function set_name($n) {
        $this->name = $n;
    }
    protected function set_color($n) {
        $this->color = $n;
    }
    private function set_weight($n) {
        $this->weight = $n;
    }
}

$mango = new Fruit();
$mango->name = 'Mango'; // OK
$mango->color = 'Yellow'; // ERROR
$mango->weight = '300'; // ERROR
?>