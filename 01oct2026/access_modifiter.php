<?php 
class MyClass {
    // Property public, protected, prrivate
    public $name;
    public $age;
    // Method
    function welcome(){
      echo "Hello ". $this->name . "<br>"; 
    }
}
$obj1 = new MyClass;

$obj1->name = "Rokon";
$obj1->age = 22; 




?>