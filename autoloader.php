<?php
spl_autoload_register(function ($name) {
	$name = ltrim($name, '\\');
	$name = str_replace('\\', '/', $name);
	$file = __DIR__ . '/' . $name . '.php';
	if (file_exists($file)) {
		require $file;
	}
});
?>
