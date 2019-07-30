<?php
require_once("Car.php");
require_once("Motorcycle.php");

$ferrari = new Car("Ferrari", "Red");
$ferrari->engine = 300;
$ferrari->doors = 2;



$mustang = new Car("Mustang", "Black");
$mustang->engine = 250;

$ferrari_engine = $ferrari->getEngine("HP");

$m = new Motorcycle("Honda", "Blue");
$m->engine = 150;


//echo $m->color;

$motor_da_moto = $m->getEngine("cilindradas");

echo $motor_da_moto;