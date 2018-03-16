<?php
spl_autoload_register(function ($name) {
	$original = $name;
	$name = ltrim($name, '\\');
	$name = str_replace('\\', '/', $name);
	$file = __DIR__ . '/src/' . $name . '.php';
	if (file_exists($file)) {
		require $file;
	} else {
		throw new Exception('Klasė ' . $original . ' neegzistuoja!');
	}
});
?>