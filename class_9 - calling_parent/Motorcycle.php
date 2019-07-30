<?php
require_once("Vehicle.php");
class Motorcycle extends Vehicle
{
	// ponto principal da aula 9 esta aqui
	public function __construct($brand, $color)
	{
		parent::__construct($brand, strtoupper($color));
	}	

}