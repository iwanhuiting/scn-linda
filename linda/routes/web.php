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
		Route::get('{id}/video', ['as' => 'video', 'uses' => 'VideoController@showVideo']);

		/* Direct to the home page */
		Route::post('{id}/video', ['as' => 'video', 'uses' => 'CommentController@storeComment']);

		/* Direct to the home page */
		Route::get('{id}/video/create', ['as' => 'create.video', 'uses' => 'VideoController@showCreateVideo']);

		/* Direct to the home page */
		Route::post('{id}/video/create', ['as' => 'create.video', 'uses' => 'VideoController@storeVideo']);

		/* Direct to the home page */
		Route::get('/catagory', ['as' => 'overviewCatagory', 'uses' => 'CatagoryController@showCatagoryOverview']);

		/* Direct to the home page */
		Route::get('/catagories', ['as' => 'all.catagories', 'uses' => 'CatagoryController@showAllOverview']);

		/* Direct to the home page */
		Route::get('/catagory/add', ['as' => 'addCatagory', 'uses' => 'CatagoryController@showAddCatagory']);

		/* Direct to the home page */
		Route::post('/catagory/add', ['as' => 'addCatagory', 'uses' => 'CatagoryController@storeCatagory']);

		/* Direct to the singe catagory view */
		Route::get('/catagory/{id}', ['as' => 'single.catagory', 'uses' => 'CatagoryController@showSingleCatagory']);

		/* Direct to the home page */
		Route::get('{id}/channel', ['as' => 'channel.page', 'uses' => 'ChannelController@showChannel']);


	});

	Auth::routes();

	Route::get('/home', 'HomeController@index')->name('home');
