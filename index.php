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
	echo 'Klasės <b>' . get_class($issetUnset) . '</b> kintamasis "name" egzistuoja.<br>';
}
if (isset($issetUnset->name2)) {
	echo 'Klasės <b>' . get_class($issetUnset) . '</b> kintamasis "name2" egzistuoja.<br>';
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

// __toString; __invoke
$tostringInvoke = new MagicMethods\Dir2\TostringInvoke('Petras', 'Jonas', 'Petraitis', 29);
echo $tostringInvoke . '<hr>';
echo '2 + 3 = ' . $tostringInvoke(2, 3) . '<hr>';

// __set_state; __clone
$setstateClone = new MagicMethods\Dir2\OtherMethods\SetstateClone('anonymous', 'anonymous@gmail.com', '$2a$10$RDlrqT2.lviwUiCaKzUeOeIAW0h4hMf/4eRyYZt85IpQHjL//Mh8e');
eval('$exported = ' . var_export($setstateClone, true) . ';');
echo 'Eksportuotas objektas:<br><pre>';
var_dump($exported);
echo '</pre><hr>';

// __debugInfo
$debugInfo = new DebugInfo(4, 7);
echo '<pre>';
var_dump($debugInfo);
echo '</pre><hr>';
?>