<?php
namespace MagicMethods\Dir2\OtherMethods;
use MagicMethods\Dir2\Extra\Car;

class CloneMethod
{
	public $car1, $car2;

	public function __construct()
	{
		$this->car1 = new Car();
		$this->car2 = new Car();
	}

	public function __clone()
	{
		echo 'Bandoma klonuoti <b>' . __CLASS__ . '</b> klasės objektą.<br>';
		$this->car1 = clone $this->car1;
	}
}
?>