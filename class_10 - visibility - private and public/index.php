<?php
require_once("Car.php");
require_once("Motorcycle.php");

$ferrari = new Car("Ferrari", "Red");
$ferrari->engine = 300;


$ferrari->setDoors(2);

$qtdDoors = $ferrari->getDoors();

echo $qtdDoors;





