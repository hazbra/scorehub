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

// Route::get('/', function () {
//     return view('welcome');
// });



Route::auth();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tweets', function()
{
    return Twitter::getMentionsTimeline(['count' => 20, 'format' => 'json']);
});

//Route::get('/', 'HomeController@welcome');

Route::get('/home', 'HomeController@index');

Route::get('/redirect/{provider}', 'SocialAuthController@redirect');
Route::get('/callback/{provider}', 'SocialAuthController@callback');

Route::get('/games', 'GamesController@index');
Route::get('/sports', 'SportsController@index');
Route::get('/scores', 'ScoresController@index');
Route::get('/games/{game}', 'GamesController@show');
Route::get('/games/{game}/edit', 'GamesController@edit');

Route::get('/sports/{sport}', 'SportsController@show');

Route::post('/sports/{sport}/games', 'GamesController@store');

Route::post('/games/{game}/scores', 'ScoresController@store');


Route::get('/crap', 'GamesController@crap');
Route::get('/gaa', 'GamesController@show_all_gaa');
Route::get('/soccer', 'GamesController@show_all_soccer');
Route::get('/rugby', 'GamesController@show_all_rugby');

Route::get('/showonerugby/{game}', 'ScoresController@showonerugby');
Route::get('/showonesoccer/{game}', 'ScoresController@showonesoccer');
Route::get('/showonegaa/{game}', 'ScoresController@showonegaa');

Route::post('/games/{game}/undo', 'ScoresController@undo_score');
Route::get('/about', 'SportsController@about');
Route::get('/contact', 'SportsController@contact');
Route::get('/privacy', 'SportsController@privacy');




