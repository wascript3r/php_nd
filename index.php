<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'autoloader.php';

// __construct; __destruct
$constructDestruct = new MagicMethods\ConstructDestruct();

// __call; __callStatic
$calls = new MagicMethods\Dir1\Calls();
$calls->nesamone(123, 'test', [3, 2, 1]);
MagicMethods\Dir1\Calls::nesamoneStatic([2, 3], 'test2', 11);

// __get; __set
$getSet = new MagicMethods\Dir1\OtherMethods\GetSet();
echo $getSet->kintamasis;
$getSet->kitasKintamasis = 123;

// __isset; __unset
$issetUnset = new MagicMethods\Dir1\OtherMethods\B\IssetUnset();
if (isset($issetUnset->name)) {
	echo 'Klasės ' . get_class($issetUnset) . ' kintamasis "name" egzistuoja.<br>';
}
if (isset($issetUnset->name2)) {
	echo 'Klasės ' . get_class($issetUnset) . ' kintamasis "name2" egzistuoja.<br>';
}

unset($issetUnset->name);
unset($issetUnset->name2);

// __sleep; __wakeup
$sleepWakeup = new MagicMethods\Dir2\SleepWakeup('Jonas', 'Petras', 'Jonaitis', 35);
$serialized = serialize($sleepWakeup);
echo 'Suserializuoti duomenys:<br><pre>';
var_dump($serialized);
echo '</pre><hr>';

$unserialized = unserialize($serialized);
echo 'Deserializuoti duomenys:<br><pre>';
var_dump($unserialized);
echo '</pre><hr>';
?>
