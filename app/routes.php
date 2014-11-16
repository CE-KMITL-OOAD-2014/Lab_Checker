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

Route::post('/ac_login','UserController@login');

Route::get('/usersetting', function() {
	return View::make('edituser');
});

Route::get('/user/logout','UserController@logout');



Route::post('/register','UserController@regisUser');

Route::get('/subject/{id}','SubjectController@getshowsubject');

Route::get('/subject/export/{id}','SubjectController@export');

Route::get('/index','SubjectController@getallsubject');



Route::get('/profile/{id}','UserController@getshowUser');

//  Subject

Route::get('/subject/check/{id}','SubjectController@check');

Route::post('/newclass','SubjectController@addSubject');

Route::get('/class','SubjectController@getallClass');

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

Route::post('/posteditsubject/{id}','SubjectController@posteditsubject');

Route::get('/editsubject/{id}','SubjectController@geteditsubject');

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

Route::get('/passfail', function() {
	return View::make('wrongPass');
});

Route::get('/userfail', function() {
	return View::make('repeat');
});

Route::get('/recomment', function() {
	return View::make('recomment');
});

Route::get('/onlycsv', function() {
	return View::make('onlyCsv');
});