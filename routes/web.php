<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
	if(Auth::check()){
		return redirect('/home');
	}
    else{
    	return view('welcome');
    }
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('Dashboard');

Route::group(['prefix' => 'projects'], function (){
	Route::get('/getMyProjects', 'ProjectController@getMyProjects')->name('Vuejs->Get My Projects');
	Route::get('/getOtherProjects', 'ProjectController@getOtherProjects')->name('Vuejs->Get Other Projects');
	Route::post('/addProject', 'ProjectController@addProject')->name('Vuejs->Add New Projects');
	Route::get('/getIndividualProject/{id}', 'ProjectController@getIndividualProject')->name('Vuejs->Get Individual Project');

	Route::get('/showProjects', 'ProjectController@showProjects')->name('Show own projects');
	Route::get('/showOtherProjects', 'ProjectController@showOtherProjects')->name('Show other projects');
    Route::get('/add', 'ProjectController@add')->name('Add project');
});

//Route::post('','ProjectController');
