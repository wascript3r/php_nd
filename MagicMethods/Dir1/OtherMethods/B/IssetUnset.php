<?php
namespace MagicMethods\Dir1\OtherMethods\B;

class IssetUnset
{
	public $name = 'IssetUnset';

	public function __isset($name)
	{
		echo 'Bandoma iškviesti isset() funkciją neegzistuojamčiam klasės ' . __CLASS__ . ' kintamajam.<hr>';
	}

	public function __unset($name) 
	{
		echo 'Bandoma iškviesti unset() funkciją neegzistuojančiam klasės ' . __CLASS__ . ' kintamajam.<hr>';
	}
}
?>
