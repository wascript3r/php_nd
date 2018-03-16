<?php
namespace MagicMethods\Dir2\Extra;

class Car
{
    public static $instances = 0;
    public $instance;

    public function __construct()
    {
        $this->instance = ++self::$instances;
    }

    public function __clone()
    {
        $this->instance = ++self::$instances;
    }
}
?>