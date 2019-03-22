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

	
	/* Direct to the home page */
	Route::get('/', ['as' => 'homepage', 'uses' => 'homepageController@showHomePage']);

	/* Direct to the home page */
	Route::get('/startpage', ['as' => 'startpage', 'uses' => 'homepageController@showStartPage']);

	/* Direct to the home page */
	Route::get('/signup', ['as' => 'signup', 'uses' => 'RegistrationController@showRegistration']);

	Route::get('/login', ['as' => 'login', 'uses' => 'LoginController@showLogin']);

