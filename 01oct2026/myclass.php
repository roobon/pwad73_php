<?php 
class MyClass {
    // Property
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

$obj1->welcome();

//echo "<pre>";
//var_dump($obj1);
$obj2 = new MyClass;
$obj2->name = "Rifat";
$obj2->age = 24;

$obj2->welcome();

//var_dump($obj2);

?>