<?php
require_once("Car.php");
require_once("Motorcycle.php");

$ferrari = new Car();
$ferrari->brand = "Ferrari";
$ferrari->color = "Red";
$ferrari->engine = 300;
$ferrari->doors = 2;



$mustang = new Car();
$mustang->brand = "Mustang";
$mustang->color = "Black";
$mustang->engine = 250;

$ferrari_engine = $ferrari->getEngine("HP");

$m = new Motorcycle();
$m->brand = "Honda";
$m->color = "Blue";
$m->engine = 150;


//echo $m->color;

$motor_da_moto = $m->getEngine("cilindradas");

echo $motor_da_moto;