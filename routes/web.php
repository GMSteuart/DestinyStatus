<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::pattern('platform', 'psn|xbl');

Route::any('/', ['uses' => 'HomeController@index', 'as' => 'home']);

Route::any('/privacy', ['uses' => 'HomeController@privacy', 'as' => 'privacy']);

Route::get('select/{gamertag}', ['uses' => 'HomeController@select', 'as' => 'select']);

Route::group(['prefix' => '{platform}/{player}'], function () {
    Route::get('/', ['uses' => 'AccountController@index', 'as' => 'account']);
});

Route::get('/search/autocomplete', ['uses' => 'UtilController@searchAutocomplete', 'as' => 'autocomplete']);

Route::get('/logout', ['uses' => 'AuthController@logout', 'as' => 'logout']);
Route::get('/oauth/login', ['uses' => 'AuthController@redirectToProvider', 'as' => 'login']);
Route::get('/oauth/callback', ['uses' => 'AuthController@handleProviderCallback', 'as' => 'callback']);
