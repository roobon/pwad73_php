<?php
class Fruit {
  public $name;
  public $color;

  function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
    echo "I am ready<hr>";
  }

  function __destruct() {
    echo "Tata Bye bye <br>";
  }
}

$apple = new Fruit('Apple', 'Red');
// $banana = new Fruit('Banana', 'Yellow');
?>