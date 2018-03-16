<?php
namespace MagicMethods;

class ConstructDestruct
{
	public function __construct()
	{
		echo '<b>' . __CLASS__ . '</b> klasės objektas buvo sėkmingai sukurtas.<hr>';
	}

	public function __destruct()
	{
		echo '<b>' . __CLASS__ . '</b> klasės objektas buvo sėkmingai sunaikintas.<hr>';
	}
}
?>