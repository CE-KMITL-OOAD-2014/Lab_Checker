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

Route::get('/',function()
{
	if(Auth::check()){
		return Redirect::to('/index');
	}else{
		return View::make('login');
	}

});
/*
Route::get('/home',function(){
	return 	Redirect::to('/');
});
*/
Route::post('/ac_login','UserController@login');

Route::get('/usersetting', function() {
	return View::make('edituser');
});

Route::get('/user/logout','UserController@logout');



Route::post('/register','UserController@regisUser');

Route::get('/index', function() {
	return View::make('index');
});

Route::get('/editprofile', function() {
	return View::make('usersetting');
});

//  Subject

Route::post('/newclass','SubjectController@addSubject');

Route::get('/class',function() {
	return View::make('subject');
});

Route::get('/deletesubject', function() {
	return View::make('deleteSub');
});

Route::get('/subject/newClass', function() {
	return View::make('newclass');
});

Route::get('/newClass', function() {
	return View::make('newclass');
});
/*
Route::post('/')
*/
Route::get('/editclass', function() {
	return View::make('editSub');
});

Route::get('/myClass', function() {
	return View::make('myClass');
});

