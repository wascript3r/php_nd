<?php
namespace MagicMethods\Dir2;

class TostringInvoke
{
	public $firstname, $lastname, $middlename, $age;

	public function __construct($firstname, $lastname, $middlename, $age)
	{
		$this->firstname = $firstname;
		$this->lastname = $lastname;
		$this->middlename = $middlename;
		$this->age = $age;
	}

	public function __toString()
	{
		echo 'Bandoma klasės <b>' . __CLASS__ . '</b> objektą atvaizduoti kaip string:<br>';
		return json_encode([
			'firstname' => $this->firstname,
			'lastname' => $this->lastname,
			'middlename' => $this->middlename,
			'age' => $this->age
		]);
	}

	public function __invoke($a, $b)
	{
		echo 'Bandoma klasės <b>' . __CLASS__ . '</b> objektą iškviesti kaip funkciją<br>';
		return $a + $b;
	}
}
?>