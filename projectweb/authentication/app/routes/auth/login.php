<?php

$app->get('/login', function() use ($app) {
	$app->render('auth/login.php');

})->name('login');

$app->post('/login', function() use ($app){
	
	$request = $app->request;

	$identifier = $request->post('identifier');
	$password = $request->post('password');

	$v = $app->validation;

	$v->validate([
		'identifier' => [$identifier, 'required'],
		'password' => [$password, 'required']
	]);

	if ($v->passes()) {
		// log the user in 
	}

	$app->render('auth/login.php', [
		'errors' => $v->errors(),
		'request' => $request
	]);

})->name('login.post');

?> 