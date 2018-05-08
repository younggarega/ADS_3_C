<?php

$app->get('/register', function() use ($app){
	$app->render('auth/register.php');
})->name('register');

$app->post('/register', function() use ($app) {
	echo 'Form posted.';
});

?>