<?php
require_once("Car.php");

$ferrari = new Car("Ferrari", "Red");
$ferrari->engine = 300;


$ferrari->setDoors(2);
$qtdDoors = $ferrari->getDoors();
//echo $qtdDoors;


$ferrari->setColor("Now is blue");
$newColor = $ferrari->getColor();
echo $newColor;




