<?php

class Car
{
	public $brand;
	public $color;
	public $engine;

	public function getEngine($type)
	{
		return "{$this->engine} {$type}";
	}


	public function getEngine_2($type = null)
	{
		return "{$this->engine} {$type}";
	}	
}