<?php

// composer autoload
require_once __DIR__.'/../vendor/autoload.php';

// namespace
use Acffdev\PhpCore\App as App;

// initializes
try { 
	App::run();
} catch(Exception $e) { 
	echo $e->getMessage(); 
}
