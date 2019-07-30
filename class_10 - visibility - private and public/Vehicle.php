<?php
class Vehicle
{
	public $brand;
	public $color;
	public $engine;

	public function __construct($brand, $color)
	{
		$this->brand = $brand;
		$this->color = $color;
	}	

	public function getEngine($type = "hp")
	{
		return "{$this->engine} {$type}";
	}
}