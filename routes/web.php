<?php
Route::get('sitemap.xml', 'SitemapsController@index');

//Pages
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localize']
    ], 
    function()
{
    Route::get('/', function(){ 
        return \Redirect::to('http://nonstoptruckservice.hu/hu', 301); 
    });
    //Route::get('/', ['as'	=>	'pages.index', 'uses'	=> 'PagesController@home']);
    Route::get(LaravelLocalization::transRoute('routes.about'), function() {
        return \Redirect::to('http://nonstoptruckservice.hu/hu/cegunrol', 301); 
    });
    Route::get(LaravelLocalization::transRoute('routes.garage'), function() {
        return \Redirect::to('http://nonstoptruckservice.hu/hu/kamion-es-potkocsi-szerviz', 301); 
    });
    Route::get(LaravelLocalization::transRoute('routes.commerce'), function() {
        return \Redirect::to('http://nonstoptruckservice.hu/hu/kamion-es-potkocsi-alkatresz-kecskemet', 301); 
    });
    //Route::get(LaravelLocalization::transRoute('routes.products'), ['as'	=>	'pages.products', 'uses'	=> 'PagesController@products']);
    //Route::get(LaravelLocalization::transRoute('routes.tender'), ['as'	=>	'pages.tender', 'uses'	=> 'PagesController@tender']);

    //Route::get(LaravelLocalization::transRoute('routes.sale'), ['as'	=>	'sales.index', 'uses'	=> 'SalesController@index']);
    //Route::post('felirakozas', ['as'	=>	'sales.store', 'uses'	=> 'SalesController@store']);
    
    Route::get(LaravelLocalization::transRoute('routes.contact'), function() {
        return \Redirect::to('http://nonstoptruckservice.hu/hu/kapcsolat', 301); 
    });
    //Mail
    Route::post(LaravelLocalization::transRoute('routes.tender'), ['as'	=> 'mail.tender', 'uses' => 'MailsController@sendTenderToSupport']);
    Route::post(LaravelLocalization::transRoute('routes.contact'), ['as'	=> 'mail.contact', 'uses' => 'MailsController@sendMailToSupport']);
});
//Auth
Auth::routes();
Route::get('/home', 'HomeController@index');
