<?php

return[
	'app' => [
		'url' => 'https://localhost',
		'hash' => [
			'algo' => PASSWORD_BCRYPT,
			'cost' => 10
		]
	],
	'db'=> [
		'driver' => 'mysql',
		'host' => '127.0.0.1',
		'name' => 'site',
		'username' => 'root',
		'password' => 'root',
		'charset' => 'utf8',
		'collation' => 'utf8_unicode_ci',
		'prefix' => ''
	],
	'auth' => [
		'session' => 'user_id',
		'remember' => 'user_r'
	],
	'mail' => [
		'smtp_auth' => true,
		'smptp_secure'=> 'tls',
		'host' => 'smptp.gmail.com',
		'username' => 'younggaregaa@gmail.com',
		'password' => '22051996',
		'port' => 587,
		'html' => true
	],
	'twig' => [
		'debug' => true
	],
	'crsf' => [
		'session' => 'crsf_token'
	]
];


?>