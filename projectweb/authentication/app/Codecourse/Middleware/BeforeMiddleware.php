<?php

namespace Codecourse\Middleware;

use Slim\Middleware;

class BeforeMiddleware extends Middleware
{
	public function call()
	{
		$app->app->hook('slim.before', [$this, 'run']);

		$this->next->call();
	}

	public function run()
	{
		if (isset($_SESSION[$this->app->config->get('auth.session')])) {
			$this->auth = $this->app->user->where('id', $_SESSION[$this->app->config->get('auth.session')]);
		}
	}
} 
?>