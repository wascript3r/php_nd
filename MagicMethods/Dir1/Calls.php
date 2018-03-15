<?php
namespace MagicMethods\Dir1;

class Calls
{
	public function __call($name, $args)
	{
		echo 'Klasės <b>' . __CLASS__ . '</b> metodas "' . $name . '" neegzistuoja.<br>';
		echo 'Metodo argumentai:<br><pre>';
		var_dump($args);
		echo '</pre><hr>';
	}

	public static function __callStatic($name, $args)
	{
		echo 'Klasės <b>' . __CLASS__ . '</b> statinis metodas "' . $name . '" neegzistuoja.<br>';
		echo 'Statinio metodo argumentai:<br><pre>';
		var_dump($args);
		echo '</pre><hr>';
	}
}
?>