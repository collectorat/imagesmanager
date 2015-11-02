<?php

//Route::get('/', 'WelcomeController@index');
// Note we let put this below in Route::controller. now we have to let WelcomeController to get
// with getIndex() change in WelcomeController.php

Route::get('home', 'HomeController@index');

Route::controllers([
	'home' => 'HomeController',
	'auth' => 'Auth\AuthController',
	'validated/user' => 'UserController',
	'validated/photos' => 'PhotoController',
	'validated/albums' => 'AlbumController',
	'/' => 'WelcomeController',
]);
