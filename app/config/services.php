<?php

return [

	/*
	|--------------------------------------------------------------------------
	| Third Party Services
	|--------------------------------------------------------------------------
	|
	| This file is for storing the credentials for third party services such
	| as Stripe, Mailgun, Mandrill, and others. This file provides a sane
	| default location for this type of information, allowing packages
	| to have a conventional place to find your various credentials.
	|
	*/

	'mailgun' => [
		'domain' => '',
		'secret' => '',
	],

	'mandrill' => [
		'secret' => '',
	],

	'ses' => [
		'key' => '',
		'secret' => '',
		'region' => 'us-east-1',
	],

	'stripe' => [
		'model'  => 'App\User',
		'key' => '',
		'secret' => '',
	],

	'google' => [
		'client_id' 	=> '84175406552-5p362cjduabvhpi8sceq12jfgparb3r0.apps.googleusercontent.com',//env('GOOGLE_CLIENT_ID'),
		'client_secret' => 'dlDK-2j-PBb7mSlg6aXuCl-c', //env('GOOGLE_CLIENT_SECRET'),
		'redirect' 		=> 'http://localhost:8001/login/google'
	],

	'github' => [
		'client_id'		=> '79c9c4755bf47c7154a0',
		'client_secret'	=> 'b7aa8ea34f79798802d878f4a2e335daad4821f7',
		'redirect'		=> 'http://localhost:8001/login/github'
	]
];
