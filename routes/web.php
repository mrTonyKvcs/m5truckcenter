<?php
//Pages
Route::group(
	[
		'prefix' => LaravelLocalization::setLocale(),
		'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localize']
	], 
	function()
{
	Route::get('/', ['as'	=>	'pages.index', 'uses'	=> 'PagesController@home']);
	Route::get(LaravelLocalization::transRoute('routes.about'), ['as'	=>	'pages.about', 'uses'	=> 'PagesController@about']);
	Route::get(LaravelLocalization::transRoute('routes.contact'), ['as'	=>	'pages.contact', 'uses'	=> 'PagesController@contact']);
});

//Auth
Auth::routes();
Route::get('/home', 'HomeController@index');
