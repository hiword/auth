<?php
return [
		
	'username'=>'name',//['name','email','mobile']
	'password'=>'password1',
	
	
	'table'=>'admins',
	
	'database'=>[
		'driver' => 'mysql',
		'host' => 'localhost:3306',
		'database' => '3',
		'username' => 'root',
		'password' => 'root',
		'charset' => 'utf8',
		'collation' => 'utf8_unicode_ci',
	],
	
	'specific'=>[
		'login'=>Simon\Auth\Login\Specific\LoginSpecific::class,
		'register'=>Simon\Auth\Specific\RegisterSpecific::class,
	],
	
	'specific_model'=>[
		'analogue'=>Simon\Auth\Models\Specific\Medoo::class,
	],
	
];