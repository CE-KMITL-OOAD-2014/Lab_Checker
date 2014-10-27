<?php
	class RegisterController extends BaseController{
		public function Register()
		{
			//var_dump(Input::all());
			$odj= new Users;
			$odj->setId_user(Input::get('id'));
			$odj->setPassword(md5(Input::get('password')));
			$odj->setName(Input::get('name'));
			$odj->setSurname(Input::get('surname'));
			$odj->setEmail(Input::get('email'));
			$odj->setStatus(Input::get('status'));
			$odj->newUsers();
			return Redirect::to('/');

		}




	}