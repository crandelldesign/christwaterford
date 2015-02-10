<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/*Route::get('/', function()
{
	return View::make('hello');
});*/

Route::get('/aboutus', function()
{
	return Redirect::to('/about-us', 301);
});
Route::get('/worship-info', function()
{
	return Redirect::to('/worship-information', 301);
});
Route::get('/ministries/worship-music-min', function()
{
	return Redirect::to('/ministries/worship-music', 301);
});
Route::get('/ministries/educational-min', function()
{
	return Redirect::to('/ministries/educational', 301);
});
Route::get('/ministries/children-youth-min', function()
{
	return Redirect::to('/ministries/children-youth', 301);
});
Route::get('/ministries/comm-global-min', function()
{
	return Redirect::to('/ministries/community-global', 301);
});
Route::get('/ministries/congre-life-min', function()
{
	return Redirect::to('/ministries/congregational-life', 301);
});
Route::get('/faces1', function()
{
	return Redirect::to('/faces', 301);
});
Route::get('/faces2', function()
{
	return Redirect::to('/faces/2', 301);
});
Route::get('/faces3', function()
{
	return Redirect::to('/faces/3', 301);
});
Route::get('/faces4', function()
{
	return Redirect::to('/faces/4', 301);
});
Route::get('contact.php', function()
{
	return Redirect::to('/contact', 301);
});
Route::get('contact.php', function()
{
	return Redirect::to('/contact', 301);
});


Route::controller('/api', 'ApiController');
Route::controller('/events/admin', 'AdminController');
Route::controller('/ministries', 'MinistriesController');
Route::controller('/', 'HomeController');

App::missing(function($exception)
{
	return Response::view('home.404', array(), 404);
});
