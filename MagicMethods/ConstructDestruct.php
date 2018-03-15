<?php
namespace MagicMethods;

class ConstructDestruct
{
	public function __construct()
	{
		echo 'Klasė <b>' . __CLASS__ . '</b> buvo sėkmingai užkrauta.<hr>';
	}

	public function __destruct()
	{
		echo 'Klasė <b>' . __CLASS__ . '</b> buvo sėkmingai sunaikinta.<hr>';
	}
}
?>