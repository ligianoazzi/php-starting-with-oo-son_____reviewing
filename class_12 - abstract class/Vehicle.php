<?php
abstract class Vehicle
{
	public $brand;
	protected $color;
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

	abstract public function getBrand();
}