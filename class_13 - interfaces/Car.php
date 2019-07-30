<?php
require_once ("Vehicle.php");
class Car extends Vehicle
{
	private $doors;

	public function setDoors($doors){
		$this->doors = $doors;
	}

	public function getDoors(){
		return $this->doors;
	}

	// $color is in Vehicle
	public function setColor($color){
		$this->color = $color;
	}

	public function getColor(){
		return $this->color;
	}

	public function getBrand(){
		
	}

}
// it is possible to access properties of father class
