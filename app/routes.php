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

Route::get('/subject/{id}','SubjectController@getshowsubject');

Route::get('/subject/export/{id}','SubjectController@export');

Route::get('/index','SubjectController@getallsubject');



Route::get('/editprofile', function() {
	return View::make('usersetting');
});

//  Subject

Route::get('/subject/check/{id}','SubjectController@check');

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

//Announcement
Route::get('/announcement','AnnouncementController@getallAnnounce');

Route::post('/newAnnouncement','AnnouncementController@getnewAnnounce');

Route::get('/announcement/{id}','AnnouncementController@getshowAnnounce');

Route::post('/announcement/show/{id}/comment','CommentController@postComment');

Route::get('/newClass', function() {
	return View::make('newclass');
});

Route::get('/editclass', function() {
	return View::make('editSub');
});

Route::get('/myClass', function() {
	return View::make('myClass');
});

Route::get('/myClassStu', function() {
	return View::make('myClassstudent');
});

Route::get('/newtopic', function() {
	return View::make('newtopic');
});

Route::get('/topic', function() {
	return View::make('topic');
});

Route::get('/announce', function() {
	return View::make('announce');
});

Route::get('/profile', function() {
	return View::make('profile');
});