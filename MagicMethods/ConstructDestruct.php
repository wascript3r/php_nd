<?php
namespace MagicMethods;

class ConstructDestruct
{
	public function __construct()
	{
		echo 'Klasė ' . __CLASS__ . ' buvo sėkmingai užkrauta.<hr>';
	}

	public function __destruct()
	{
		echo 'Klasė ' . __CLASS__ . ' buvo sėkmingai sunaikinta.<hr>';
	}
}
?>
