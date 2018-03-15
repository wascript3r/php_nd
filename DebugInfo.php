<?php
class DebugInfo
{
	public $x, $y;

	public function __construct($x, $y)
	{
		$this->x = $x;
		$this->y = $y;
	}

	public function __debugInfo()
	{
		echo 'Bandoma iškviesti var_dump() funkciją <b>' . __CLASS__ . '</b> klasės objektui.<br>';
		return [
			'x' => $this->x,
			'y' => $this->y,
			'xMultipliedByY' => $this->x * $this->y
		];
	}
}
?>