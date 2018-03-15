<?php
namespace MagicMethods\Dir2\OtherMethods;

class SetstateClone
{
	public $username, $email, $password;
	private $user = true;

	public function __construct($username, $email, $password)
	{
		$this->username = $username;
		$this->email = $email;
		$this->password = $password;
	}

	public static function __set_state($array)
	{
		echo 'Bandoma iškviesti var_export() funkciją <b>' . __CLASS__ . '</b> klasės objektui.<br>';
		return new SetstateClone($array['username'], $array['email'], null);
	}
}
?>