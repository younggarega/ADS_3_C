<?php

use Slim\Slim;
use Slim\Views\Twig;

use Noodlehaus\Config;

use Codecourse\User\User;

session_cache_limiter(false);
session_start();

ini_set('display_errors', 'On');

define('INC_ROOT', dirname(__DIR__));

require INC_ROOT . '/vendor/autoload.php';

$app = new Slim([
	'mode' => file_get_contents(INC_ROOT . '/mode.php'),
	'view' => new Twig(),
	'templates.path' => INC_ROOT . '/app/views'
]);

$app->configureMode($app->config('mode'), function() use ($app) {
	$app->config = Config::load(INC_ROOT . "/app/config/{$app->mode}.php");
});

require 'database.php';

$app->container->set('user', function() {
	return new User;
});


// Untuk Test Root
//$app->get('/test/:name',function($name){
//	echo "Hellooo {$name} !";
//})

?>