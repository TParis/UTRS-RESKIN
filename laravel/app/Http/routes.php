<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::auth();

//Appeals Submit screens
Route::get('/', 'AppealController@index');										//PAGE
Route::post('/', 'AppealController@create');									//PAGE
Route::get('/blockinfo/{username}', 'mediaWikiCacheController@getUserInfo');	//AJAX

//Home
Route::get('/home', 'HomeController@index');									//PAGE

//Appeals
Route::get('/appeal/{appeal}', 'AppealController@view');						//PAGE
Route::post('/appeal/{appeal}/addComment', 'AppealController@addComment');		//AJAX
Route::put('/appeal/{appeal}/statusChange', 'AppealController@statusChange');	//AJAX

//Unblock advice
Route::get('/block/notices/anon', function() {
	return view('Appeal.applicants.advice.anon');
});