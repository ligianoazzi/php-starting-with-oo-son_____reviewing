<?php
require_once ("Car.php");

$ferrari = new Car();
$ferrari->brand = "Ferrari";
$ferrari->color = "Red";
$ferrari->engine = 300;



$mustang = new Car();
$mustang->brand = "Mustang";
$mustang->color = "Black";
$mustang->engine = 250;


$ferrari_engine = $ferrari->getEngine("alcool");

echo $ferrari_engine;