<?php 
// Parent Class
class MyClass {
    public $name;
    protected $age;
   
    function welcome(){
      echo "Hello ". $this->name . "<br>"; 
    }
}

class Child_one extends MyClass {
    public $age = 30;
}

$obj1 = new MyClass;
$obj1->name = "Rokon";
var_dump($obj1);





?>