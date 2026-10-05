<?php
$foods = array("pasta", "steak", "fish", "potatoes");
$food = preg_grep("/s/", $foods);
print_r($food);
?>