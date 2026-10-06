<?php
class Goodbye {
  const MESSAGE = "Thank you for visiting W3Schools.com!";
}

$abc = new Goodbye;
echo $abc::MESSAGE;
//:: Scope Resolution Operator
echo Goodbye::MESSAGE; // Access constant
?>