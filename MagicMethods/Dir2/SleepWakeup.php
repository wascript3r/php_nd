<?php
namespace MagicMethods\Dir2;

class SleepWakeup
{
	public $firstname, $lastname, $middlename, $age;

	public function __construct($firstname, $lastname, $middlename, $age)
	{
		$this->firstname = $firstname;
		$this->lastname = $lastname;
		$this->middlename = $middlename;
		$this->age = $age;
	}

	public function __sleep()
	{
		echo 'Bandoma iškviesti serialize() funkciją klasei ' . __CLASS__ . '.<br>';
		return ['firstname', 'lastname', 'age'];
	}

	public function __wakeup() 
	{
		echo 'Bandoma iškviesti unserialize() funkciją klasei ' . __CLASS__ . '.<br>';
	}
}
?>
