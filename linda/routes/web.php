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

		
	Route::group(['middleware' => ['auth']], function() {
	
		/* Direct to the home page */
		Route::get('/', ['as' => 'homepage', 'uses' => 'homepageController@showHomePage']);

		/* Direct to the home page */
		Route::get('/startpage', ['as' => 'startpage', 'uses' => 'homepageController@showStartPage']);

		/* Direct to the home page */
		Route::get('/signup', ['as' => 'signup', 'uses' => 'RegistrationController@showRegistration']);

		/* Direct to the home page */
		Route::post('/signup', ['as' => 'signup', 'uses' => 'RegistrationController@storeUser']);

		/* Direct to the home page */
		Route::get('/logout', ['as' => 'logout', 'uses' => 'LoginController@logout']);

		/* Direct to the home page */
		Route::get('/userpanel', ['as' => 'userpanel', 'uses' => 'AdminController@showUserPanel']);

		/* Direct to the home page */
		Route::get('/video', ['as' => 'video', 'uses' => 'VideoController@showVideo']);


	});

	Auth::routes();

	Route::get('/home', 'HomeController@index')->name('home');
