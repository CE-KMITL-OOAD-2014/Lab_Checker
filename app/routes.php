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
	if(Session::get('user',NULL)==NULL){
		return View::make('login');
	}else{
		return Redirect::to('/index');
	}

});

Route::post('/ac_login',function()
{
	$id=Input::get('id');
	$pass=md5(Input::get('password'));
	$user_tmp = Users::chkLogin($id,$pass);
	if($user_tmp!=NULL){
		Session::push('uses',$user_tmp);
		return  Session::get('user',NULL);
	}else{
		return View::make('login');	
	}

//	return  Session::get('user',NULL); // Redirect::to('/');
});

Route::get('/logout',function()
{
	Session::flush();
	return Redirect::to('/');

});



Route::post('/register','RegisterController@Register');

Route::get('/test', function() {
	return View::make('test2');
});

Route::get('/editprofile', function() {
	return View::make('usersetting');
});


Route::get('/subject', function() {
	return View::make('subject');
});

Route::get('/deletesubject', function() {
	return View::make('deleteSub');
});

Route::get('/createclass', function() {
	return View::make('newclass');
});

Route::get('/editclass', function() {
	return View::make('editSub');
});

Route::get('/myClass', function() {
	return View::make('myClass');
});