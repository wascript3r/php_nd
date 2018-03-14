<?php
namespace MagicMethods\Dir1\OtherMethods;

class GetSet
{
	public function __get($name)
	{
		echo 'Klasės ' . __CLASS__ . ' kintamasis "' . $name . '" neegzistuoja.<hr>';
	}

	public function __set($name, $value) 
	{
		echo 'Klasės ' . __CLASS__ . ' kintamasis "' . $name . '" neegzistuoja, todėl jam negalima priskirti reikšmės "' . $value . '"<hr>';
	}
}
?>
