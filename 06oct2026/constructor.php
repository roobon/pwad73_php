<?php
class Fruit {
  public $name;
  public $color;

  function __construct() {
    // $this->name = $name;
    // $this->color = $color;
    echo "I am ready to work";
  }

  function get_details() {
    echo "Name: " . $this->name . ". Color: " . $this->color .".<br>";
  }
}

$apple = new Fruit();
//var_dump($apple);
//$apple->get_details();

// $banana = new Fruit('Banana', 'Yellow');
// $banana->get_details();
?>