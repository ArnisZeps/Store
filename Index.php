<?php 
require 'application/lib/Dev.php';

use application\core\router;
spl_autoload_register(function($class){
	$path = str_replace('\\', '/', $class.'.php');
	if(file_exists($path)){
		require $path;
	}
});

session_start();

$router = new router; 

$router->run();