<?php
require_once ("Car.php");

$ferrari = new Car();
$ferrari->brand = "Ferrari";
$ferrari->color = "Red";
$ferrari->engine = 300;

echo $ferrari->brand;
echo "<br>";
echo $ferrari->color;
echo "<br>";
echo $ferrari->engine;


$mustang = new Car();
$mustang->brand = "Mustang";
$mustang->color = "Black";
$mustang->engine = 250;

echo $mustang->brand;
echo "<br>";
echo $mustang->color;
echo "<br>";
echo $mustang->engine;

var_dump($ferrari);
var_dump($mustang);