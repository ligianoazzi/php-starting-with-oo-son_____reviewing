<?php
class Vehicle
{
	public $brand;
	public $color;
	public $engine;

	public function getEngine($type = "hp")
	{
		return "{$this->engine} {$type}";
	}
}