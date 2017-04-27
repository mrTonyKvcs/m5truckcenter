<?php
Route::get('/', ['as'	=>	'pages.index', 'uses'	=> 'PagesController@home']);
//Auth
Auth::routes();
Route::get('/home', 'HomeController@index');
