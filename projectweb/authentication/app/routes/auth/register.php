<?php

$app->get('/register', function() use ($app){
	$app->render('auth/register.php');
})->name('register');

?>